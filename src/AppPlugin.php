<?php

namespace Miaoxing\App;

use Miaoxing\App\Middleware\CheckAppStatus;
use Miaoxing\App\Middleware\LogRequest;
use Miaoxing\App\Service\LoginLogModel;
use Miaoxing\Plugin\BasePage;
use Miaoxing\Plugin\Service\Ret;
use Miaoxing\Plugin\Service\UserModel;
use Miaoxing\Services\Middleware\Auth;
use Miaoxing\Services\Middleware\Cors;

class AppPlugin extends \Miaoxing\Plugin\BasePlugin
{
    protected $name = '应用';

    protected $description = '';

    protected $code = 202;

    public function onLinkToGetLinks(&$links, &$types)
    {
        $types['site'] = [
            'name' => '官网',
            'sort' => 900,
        ];

        $links[] = [
            'typeId' => 'site',
            'name' => '首页',
            'url' => '',
        ];
    }

    public function onPageInit110(BasePage $page)
    {
        $page->middleware(Cors::class);
        $page->middleware(Auth::class);
        $page->middleware(LogRequest::class);

        // 除去 admin/login 页面
        if (0 === strpos($this->app->getController(), 'admin/')) {
            $page->middleware(CheckAppStatus::class);
        }
    }

    public function onBeforeScript()
    {
        wei()->page->addJsVar('miaoxing', [
            'baseUrl' => wei()->req->getBaseUrl(),
        ]);
    }

    public function onLogin()
    {
        LoginLogModel::log([
            'type' => LoginLogModel::TYPE_LOGIN,
        ]);
    }

    public function onLoginFailed(?UserModel $user, Ret $ret, $data)
    {
        LoginLogModel::log([
            'userId' => $user->id ?? 0,
            'username' => $this->str->cut($data['username'] ?? '', 255),
            'type' => LoginLogModel::TYPE_LOGIN_FAILED,
            'code' => $ret->getCode(),
            'message' => $ret->getMessage(),
        ]);
    }

    public function onLogout()
    {
        LoginLogModel::log([
            'type' => LoginLogModel::TYPE_LOGOUT,
        ]);
    }
}
