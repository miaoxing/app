<?php

namespace Miaoxing\App\Service;

use Miaoxing\Plugin\BaseService;
use Miaoxing\Plugin\Service\App;

/**
 * @property App app
 */
class JsConfig extends BaseService
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
     * @svc
     */
    protected function toArray()
    {
        return [
            // optional
            'pageMap' => $this->pageMap,
            'pluginIds' => $this->app->getModel()['pluginIds'],
            'theme' => [],
        ];
    }
}
