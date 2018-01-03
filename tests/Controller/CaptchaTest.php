<?php

namespace MiaoxingTest\App\Controller;

use Miaoxing\Plugin\Test\BaseControllerTestCase;

class CaptchaTest extends BaseControllerTestCase
{
    /**
     * 页面可以正常访问
     *
     * {@inheritdoc}
     * @dataProvider providerForActions
     */
    public function testActions($action, $code = null)
    {
        // @link https://github.com/travis-ci/travis-ci/issues/8510
        if ($action === 'index' && !function_exists('imagettfbbox')) {
            $this->markTestSkipped('忽略没有 imagettfbbox 的情况');
        }

        parent::testActions($action, $code);
    }
}
