<?php

namespace MiaoxingDoc\App {

    /**
     * @property    \Miaoxing\App\Service\Logger $logger
     * @method      bool logger($level, $message, $context = []) Logs with an arbitrary level
     *
     * @property    \Miaoxing\App\Service\Setting $setting 设置
     * @method      string|\Miaoxing\App\Service\Setting|\Miaoxing\App\Service\Setting[] setting($id = null, $default = null)
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

    /** @var Miaoxing\App\Service\Logger $logger */
    $logger = wei()->logger;

    /** @var Miaoxing\App\Service\Setting $setting */
    $setting = wei()->setting;
}
