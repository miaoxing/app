<?php

namespace Miaoxing\App\Service;

use Miaoxing\Plugin\Service\App;
use Wei\Base;

/**
 * @property App app
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
    public function toArray()
    {
        return [
            // optional
            'pageMap' => $this->pageMap,
            'pluginIds' => $this->app->getRecord()['pluginIds'],
            'theme' => [],
        ];
    }
}
