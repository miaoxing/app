<?php

namespace Miaoxing\App;

class Plugin extends \miaoxing\plugin\BasePlugin
{
    protected $name = '核心';

    protected $description = '';

    public function onAdminNavGetNavs(&$navs, &$categories, &$subCategories)
    {
        $categories['app'] = [
            'name' => '网站',
            'sort' => 1000,
        ];

        $subCategories['app-site'] = [
            'parentId' => 'app',
            'name' => '网站',
            'icon' => 'fa fa-sitemap',
            'sort' => 1000,
        ];

        $subCategories['app-setting'] = [
            'parentId' => 'app',
            'name' => '设置',
            'icon' => 'fa fa-gear',
            'sort' => 0,
        ];

        $navs[] = [
            'parentId' => 'app-setting',
            'url' => 'admin/app-settings',
            'name' => '网站设置',
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
            'url' => ''
        ];
    }

    public function onPostPageCss()
    {
        if ($customCss = wei()->setting('site.customCss')) {
            echo '<style>' . $customCss . '</style>';
        }
    }

    /**
     * 限制命令行控制器,只有在命令行下或超级管理员才可以访问
     */
    public function onControllerInit()
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
