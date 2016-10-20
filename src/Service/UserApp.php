<?php

namespace Miaoxing\App\Service;

class UserApp extends \miaoxing\plugin\BaseModel
{
    protected $table = 'userApps';

    protected $providers = [
        'db' => 'app.db'
    ];

    protected $app;

    public function getApp()
    {
        $this->app || $this->app = wei()->appRecord()->findOrInitById($this['appId']);
        return $this->app;
    }
}
