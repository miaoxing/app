<?php

namespace Miaoxing\App\Service;

use miaoxing\plugin\BaseService;
use Wei\RetTrait;
use Wei\Session;

/**
 * Class Captcha
 * @property Session $session
 */
class Captcha extends BaseService
{
    use RetTrait;

    public function render()
    {
        $this->session['captcha'] = wei()->random->string(4);
    }

    public function check($code)
    {
        if (!$code) {
            return $this->err('请输入验证码');
        }

        if ($code != $this->session['captcha']) {
            unset($this->session['captcha']);

            return $this->err('验证码不正确');
        }

        return $this->suc('通过验证');
    }
}
