<?php

namespace MiaoxingDoc\App {

    /**
     * @property    \Miaoxing\App\Service\Coll $coll
     *
     * @property    \Miaoxing\App\Service\Logger $logger
     * @method      bool logger($level, $message, $context = []) Logs with an arbitrary level
     *
     * @property    \Miaoxing\App\Service\Random $random
     *
     * @property    \Miaoxing\App\Service\Seq $seq
     * @method      null|int seq($offset = 100)
     *
     * @property    \Miaoxing\App\Service\Share $share
     *
     * @property    \Miaoxing\App\Service\Status $status 状态
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

    /** @var Miaoxing\App\Service\Coll $coll */
    $coll = wei()->coll;

    /** @var Miaoxing\App\Service\Logger $logger */
    $logger = wei()->logger;

    /** @var Miaoxing\App\Service\Random $random */
    $random = wei()->random;

    /** @var Miaoxing\App\Service\Seq $seq */
    $seq = wei()->seq;

    /** @var Miaoxing\App\Service\Share $share */
    $share = wei()->share;

    /** @var Miaoxing\App\Service\Status $status */
    $status = wei()->status;
}
