<?php

namespace Miaoxing\App;

use Miaoxing\App\Middleware\CheckAppStatus;
use Miaoxing\Plugin\BaseController;

class Plugin extends \Miaoxing\Plugin\BasePlugin
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
        // 除去 admin/login 页面
        if (substr($this->app->getController(), 0, 6) === 'admin/') {
            $controller->middleware(CheckAppStatus::class);
        }

        $this->checkCli();
    }

    public function onBeforeScript()
    {
        wei()->page->addJsVar('miaoxing', wei()->jsConfig->getConfig());
    }

    /**
     * @todo 作为middleware
     */
    protected function checkCli()
    {
        if (substr($this->app->getController(), 0, 4) !== 'cli/') {
            return;
        }

        if (php_sapi_name() == 'cli') {
            return;
        }

        if (wei()->curUser->isSuperAdmin()) {
            return;
        }

        $this->app->response->send('Forbidden', 403);
        $this->app->preventPreviousDispatch();
    }
}
