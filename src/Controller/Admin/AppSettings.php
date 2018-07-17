<?php

namespace Miaoxing\App\Controller\Admin;

class AppSettings extends \Miaoxing\Plugin\BaseController
{
    protected $controllerName = '网站设置';

    protected $actionPermissions = [
        'index,update' => '设置',
    ];

    protected $displayPageHeader = true;

    public function indexAction()
    {
        return get_defined_vars();
    }

    public function updateAction($req)
    {
        wei()->setting->setValues((array) $req['settings'], ['site.', 'theme.']);

        return $this->suc();
    }
}
