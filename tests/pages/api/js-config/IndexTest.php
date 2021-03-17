<?php

namespace MiaoxingTest\App\Pages\Api\JsConfig;

use Miaoxing\Plugin\Service\Tester;
use Miaoxing\Plugin\Test\BaseTestCase;

class IndexTest extends BaseTestCase
{
    public function testGet()
    {
        $ret = Tester::call('/api/js-config', 'get');

        $this->assertRetSuc($ret);

        $data = $ret['data'];

        $this->assertArrayHasKey('wei', $data);
        $this->assertArrayHasKey('debug', $data['wei']);

        $this->assertArrayHasKey('app', $data);
        $this->assertArrayHasKey('pluginIds', $data['app']);
    }
}