<?php

namespace MiaoxingTest\App\Controller;

use Miaoxing\Plugin\Test\BaseControllerTestCase;

/**
 * @internal
 */
final class AppControllerTest extends BaseControllerTestCase
{
    public function testIndexAction()
    {
        $res = wei()->tester('app')->exec()->response();
        $this->assertStringContainsString('<div id="root"></div>', $res);
    }
}
