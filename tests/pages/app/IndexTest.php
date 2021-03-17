<?php

namespace MiaoxingTest\App\Pages\App;

use Miaoxing\Plugin\Service\Tester;
use Miaoxing\Plugin\Test\BaseTestCase;

final class IndexTest extends BaseTestCase
{
    public function testGet()
    {
        $res = Tester::request([])->get('/app');

        $this->assertSame([], $res);
    }
}
