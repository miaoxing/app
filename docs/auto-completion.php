<?php

/**
 * @property    Miaoxing\App\Service\JsConfig $jsConfig
 */
class JsConfigMixin {
}

/**
 * @mixin JsConfigMixin
 */
class AutoCompletion {
}

/**
 * @return AutoCompletion
 */
function wei()
{
    return new AutoCompletion;
}

/** @var Miaoxing\App\Service\JsConfig $jsConfig */
$jsConfig = wei()->jsConfig;
