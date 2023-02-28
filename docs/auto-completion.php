<?php

/**
 * @property    Miaoxing\App\Service\JsConfig $jsConfig
 */
class JsConfigMixin
{
}

/**
 * @property    Miaoxing\App\Service\JsConfig $jsConfig
 */
class JsConfigPropMixin
{
}

/**
 * @property    Miaoxing\App\Service\UserModel $userModel
 */
class UserModelMixin
{
}

/**
 * @property    Miaoxing\App\Service\UserModel $userModel
 */
class UserModelPropMixin
{
}

/**
 * @mixin JsConfigMixin
 * @mixin UserModelMixin
 */
class AutoCompletion
{
}

/**
 * @return AutoCompletion
 */
function wei()
{
    return new AutoCompletion();
}

/** @var Miaoxing\App\Service\JsConfig $jsConfig */
$jsConfig = wei()->jsConfig;

/** @var Miaoxing\App\Service\UserModel $user */
$user = wei()->userModel;

/** @var Miaoxing\App\Service\UserModel|Miaoxing\App\Service\UserModel[] $users */
$users = wei()->userModel();
