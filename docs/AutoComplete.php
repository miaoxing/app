<?php

namespace MiaoxingDoc\App {

    /**
     * @property    \Miaoxing\Services\Service\Logger $logger
     * @method      bool logger($level, $message, $context = []) Logs with an arbitrary level
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

    /** @var \Miaoxing\Services\Service\Logger $logger */
    $logger = wei()->logger;
}
