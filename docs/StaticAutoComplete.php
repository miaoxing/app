<?php

namespace Miaoxing\App\Service;

interface JsConfig
{
    /**
     * @return array
     * @api
     */
    public function toArray();
}

if (true) { 
    interface JsConfig
    {
        /**
         * @return array
         * @api
         */
        public static function toArray();
    }
}
