<?php

namespace Miaoxing\App\Service;

use Miaoxing\Plugin\Service\App;
use Wei\Base;
use Wei\Request;

/**
 * @property App app
 * @property Request request
 */
class JsConfig extends Base
{
    /**
     * 替换页面的映射关系
     *
     * @var array
     */
    protected $pageMap = [];

    /**
     * 主题配置
     *
     * @var array
     */
    protected $theme = [];

    /**
     * @return array
     */
    public function getConfig()
    {
        return [
            // required
            'baseUrl' => $this->app->request->getBaseUrl(),

            // optional
            'pageMap' => $this->pageMap,
            'pluginIds' => $this->app->getRecord()['pluginIds'],
            'theme' => $this->theme,
        ];
    }
}
