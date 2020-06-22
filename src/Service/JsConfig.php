<?php

namespace Miaoxing\App\Service;

use Miaoxing\Plugin\BaseService;

/**
 * @mixin \AppMixin
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
            'debug' => $this->wei->isDebug(),
            'pluginIds' => $this->app->getModel()->pluginIds,
            'pageMap' => $this->pageMap,
            'theme' => $this->theme,
        ];
    }
}
