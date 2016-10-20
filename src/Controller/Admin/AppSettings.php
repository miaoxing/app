<?php

namespace miaoxing\app\controllers\admin;

class AppSettings extends \miaoxing\plugin\BaseController
{
    protected $controllerName = '网站设置';

    protected $actionPermissions = [
        'index,update' => '设置',
    ];

    public function indexAction()
    {
        return get_defined_vars();
    }

    public function updateAction($req)
    {
        wei()->setting->setValues((array)$req['settings'], ['site.', 'theme.']);
        return $this->suc();
    }
}
