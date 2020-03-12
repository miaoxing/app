<?php

namespace Miaoxing\App;

use Miaoxing\App\Middleware\CheckAppStatus;
use Miaoxing\Plugin\BaseController;
use Miaoxing\Plugin\Middleware\Auth;

class AppPlugin extends \Miaoxing\Plugin\BasePlugin
{
    protected $name = '核心';

    protected $description = '';

    public function onAdminNavGetNavs(&$navs, &$categories, &$subCategories)
    {
        $categories['app'] = [
            'name' => '网站',
            'sort' => 1000,
        ];
    }

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
        if (substr($this->app->getController(), 0, 6) === 'admin/') {
            $controller->middleware(CheckAppStatus::class);
        }
    }

    public function onBeforeStyle()
    {
        if (!$this->app->isAdmin()) {
            wei()->page->addPluginAssets('app');
        }
    }

    public function onBeforeScript()
    {
        wei()->page->addJsVar('miaoxing', [
            'baseUrl' => wei()->request->getBaseUrl(),
        ]);
    }
}
