<?php

namespace MiaoxingDoc\App {

    /**
     * @property    \Miaoxing\App\Service\Asset $asset
     * @method      mixed asset($file, $version = true)
     * @see         \Miaoxing\App\Service\Asset::__invoke
     *
     * @property    \Miaoxing\App\Service\Captcha $captcha 图形验证码
     *
     * @property    \Miaoxing\App\Service\Coll $coll
     *
     * @property    \Miaoxing\App\Service\Logger $logger
     * @method      bool logger($level, $message, $context = []) Logs with an arbitrary level
     * @see         \Miaoxing\App\Service\Logger::__invoke
     *
     * @property    \Miaoxing\App\Service\Page $page 页面
     *
     * @property    \Miaoxing\App\Service\Random $random
     *
     * @property    \Miaoxing\App\Service\Seq $seq
     * @method      null|int seq($offset = 100)
     * @see         \Miaoxing\App\Service\Seq::__invoke
     *
     * @property    \Miaoxing\App\Service\Status $status 状态
     *
     * @property    \Miaoxing\App\Service\UserApp $userApp
     * @method      \Miaoxing\App\Service\UserApp|\Miaoxing\App\Service\UserApp[] userApp()
     * @see         \Miaoxing\App\Service\UserApp::__invoke
     */
    class AutoComplete
    {
    }
}

namespace {

    /**
     * @return MiaoxingDoc\App\AutoComplete
     */
    function wei()
    {
    }

    /** @var Miaoxing\App\Service\Asset $asset */
    $asset = wei()->asset;

    /** @var Miaoxing\App\Service\Captcha $captcha */
    $captcha = wei()->captcha;

    /** @var Miaoxing\App\Service\Coll $coll */
    $coll = wei()->coll;

    /** @var Miaoxing\App\Service\Logger $logger */
    $logger = wei()->logger;

    /** @var Miaoxing\App\Service\Page $page */
    $page = wei()->page;

    /** @var Miaoxing\App\Service\Random $random */
    $random = wei()->random;

    /** @var Miaoxing\App\Service\Seq $seq */
    $seq = wei()->seq;

    /** @var Miaoxing\App\Service\Status $status */
    $status = wei()->status;

    /** @var Miaoxing\App\Service\UserApp $userApp */
    $userApp = wei()->userApp;
}
