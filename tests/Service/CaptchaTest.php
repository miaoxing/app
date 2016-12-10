<?php

namespace MiaoxingTest\App\Service;

use Miaoxing\Plugin\Test\BaseTestCase;

/**
 * 图形验证码
 */
class CaptchaTest extends BaseTestCase
{
    /**
     * 测试渲染结果
     */
    public function testRender()
    {
        $image = wei()->captcha->render();
        $size = getimagesizefromstring($image);

        $this->step('验证码不为空');
        $this->assertNotEmpty(wei()->captcha->getCode());

        $this->step('返回正确的图片信息');
        $this->assertEquals(wei()->captcha->getOption('width'), $size[0]);
        $this->assertEquals(wei()->captcha->getOption('height'), $size[1]);
        $this->assertEquals('image/png', $size['mime']);
    }

    /**
     * 检查验证码是否正确
     */
    public function testCheck()
    {
        $this->step('输入空验证码有错误提示');
        wei()->captcha->render();
        $ret = wei()->captcha->check('');
        $this->assertRetErr($ret, -1, '请输入验证码');

        $this->step('输入空值后,验证码不会被清空');
        $this->assertNotEmpty(wei()->captcha->getCode());

        $this->step('输入错误验证码有错误提示');
        wei()->captcha->render();
        $ret = wei()->captcha->check('err');
        $this->assertRetErr($ret, -2, '验证码不正确');

        $this->step('输入错误后,验证码会被清空');
        $this->assertEmpty(wei()->captcha->getCode());

        $this->step('输入正确验证码提示成功');
        wei()->captcha->render();
        $ret = wei()->captcha->check(wei()->session['captcha']);
        $this->assertRetSuc($ret, '通过验证');
    }
}
