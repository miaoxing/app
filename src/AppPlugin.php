<?php

namespace Miaoxing\App;

use Miaoxing\App\Middleware\CheckAppStatus;
use Miaoxing\Plugin\BasePage;
use Miaoxing\Services\Middleware\Auth;
use Wei\BaseController;

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

    /**
     * 限制命令行控制器,只有在命令行下或超级管理员才可以访问
     *
     * @param BaseController $controller
     */
    public function onControllerInit(BaseController $controller)
    {
        $controller->middleware(Auth::class);

        // 除去 admin/login 页面
        if (0 === strpos($this->app->getController(), 'admin/')) {
            $controller->middleware(CheckAppStatus::class);
        }
    }

    public function onPageInit(BasePage $page)
    {
        $this->onControllerInit($page);
    }

    public function onBeforeScript()
    {
        wei()->page->addJsVar('miaoxing', [
            'baseUrl' => wei()->req->getBaseUrl(),
        ]);
    }
}
