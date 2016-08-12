<?php

namespace miaoxing\app\docs {
    /**
     * @property    \miaoxing\app\services\AppRecord $appRecord 应用数据表服务
     * @method      \miaoxing\app\services\AppRecord|\miaoxing\app\services\AppRecord[] appRecord()
     *
     * @property    \miaoxing\app\services\UserApp $userApp 用户拥有的应用
     * @method      \miaoxing\app\services\UserApp|\miaoxing\app\services\UserApp[] userApp()
     *
     * @property    \services\UrlMapper urlMapper() URL地址映射
     *
     * @property    \miaoxing\app\services\Status $status 状态服务
     */
    class AutoComplete
    {
    }
}

namespace {
    // 为视图提供代码提示

    /** @var \miaoxing\plugin\services\App $app */
    $app = wei()->app;

    /** @var \Wei\View $view */
    $view = wei()->view;

    /** @var \Wei\Block $block */
    $block = wei()->block;

    /** @var \services\Url $url */
    $url = wei()->url;

    /** @var \Wei\Request $url */
    $req = wei()->req;

    /** @var \Wei\E $e */
    $e = wei()->e;

    /**
     * @return \miaoxing\app\docs\AutoComplete
     */
    function wei()
    {
    }
}
