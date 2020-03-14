<?php

namespace Miaoxing\App\Service;

use Miaoxing\Plugin\Service\App;
use Miaoxing\Services\Service\StaticTrait;
use Wei\Base;

/**
 * @property App app
 */
class JsConfig extends Base
{
    use StaticTrait;

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
     * @api
     */
    protected function toArray()
    {
        return [
            // optional
            'pageMap' => $this->pageMap,
            'pluginIds' => $this->app->getRecord()['pluginIds'],
            'theme' => [],
        ];
    }

    /**
     * @return int
     */
    public function __invoke()
    {
        return 123;
        // TODO: Implement __invoke() method.
    }
}
