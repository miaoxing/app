<?php

namespace miaoxing\app\tests\services;

class AppRecordTest extends \miaoxing\plugin\tests\BaseTestCase
{
    public function testGetIdByDomain()
    {
        $prefix = 'appDomain';
        $app = wei()->appRecord()->findOrInit(['domain' => 't.test.com']);
        $app->save([
            'name' => 'domain',
            'domain' => ''
        ]);

        wei()->cache->remove($prefix . 't.test.com');
        $this->assertFalse(wei()->appRecord->getIdByDomain('t.test.com'));

        wei()->cache->remove($prefix . 't.test.com');
        $app->save(['domain' => 't.test.com']);

        $this->assertEquals('domain', wei()->appRecord->getIdByDomain('t.test.com'));

        $app->destroy();
    }
}
