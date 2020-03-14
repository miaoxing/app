<?php

/**
 * @property    Miaoxing\App\Service\JsConfig $jsConfig
 * @method      mixed jsConfig()
 */
class JsConfigMixin {
}

/**
 * @property    Miaoxing\App\Service\JsConfig2 $jsConfig2
 * @method      mixed jsConfig2()
 */
class JsConfig2Mixin {
}

/**
 * @mixin JsConfigMixin
 * @mixin JsConfig2Mixin
 */
class AutoComplete {
}

/**
 * @return AutoComplete
 */
function wei()
{
    return new AutoComplete;
}

/** @var Miaoxing\App\Service\JsConfig $jsConfig */
$jsConfig = wei()->jsConfig;

/** @var Miaoxing\App\Service\JsConfig2 $jsConfig2 */
$jsConfig2 = wei()->jsConfig2;
