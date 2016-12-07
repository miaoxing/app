<?php

namespace miaoxing\app\docs {

    /**
     * @property    \Miaoxing\App\Service\AppRecord $appRecord 应用数据表服务
     * @method      \Miaoxing\App\Service\AppRecord|\Miaoxing\App\Service\AppRecord[] appRecord()
     *
     * @property    \Miaoxing\App\Service\UserApp $userApp 用户拥有的应用
     * @method      \Miaoxing\App\Service\UserApp|\Miaoxing\App\Service\UserApp[] userApp()
     *
     * @property    \services\UrlMapper urlMapper() URL地址映射
     *
     * @property    \Miaoxing\App\Service\Status $status 状态服务
     *
     * @property    \Miaoxing\App\Service\Captcha $captcha 验证码服务
     */
    class AutoComplete
    {
    }
}

namespace {

    // 为视图提供代码提示

    /** @var \Miaoxing\Plugin\Service\App $app */
    $app = wei()->app;

    /** @var \Wei\View $view */
    $view = wei()->view;

    /** @var \Wei\Block $block */
    $block = wei()->block;

    /** @var \services\Url $url */
    $url = wei()->url;

    /** @var \Wei\Request $req */
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
