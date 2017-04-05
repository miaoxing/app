<?php

namespace Miaoxing\App\Callback;

abstract class Db
{
    public static function beforeQuery($sql, $params)
    {
        $message = $sql;
        if ($params) {
            $message .= ' with parameters: ' . json_encode($params, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        }
        wei()->logger->debug($message);
    }
}
