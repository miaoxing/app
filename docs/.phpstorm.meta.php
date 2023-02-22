<?php

namespace PHPSTORM_META {

    use Miaoxing\Plugin\Service\User;

    override(User::cur(), map([
        '' => \Miaoxing\App\Service\UserModel::class,
    ]));
}
