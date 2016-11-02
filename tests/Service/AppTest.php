<?php

namespace MiaoxingTest\App\Service;

use MiaoxingTest\App\Fixture\Controller\Test;

class AppTest extends \miaoxing\plugin\tests\BaseTestCase
{
    /**
     * 测试返回数据
     *
     * @dataProvider dataForResponse
     * @param $action
     * @param $content
     */
    public function testResponse($action, $content)
    {
        //wei()->curUser->loginById(1);

        $app = wei()->app;
        $app->setControllerMap(['test' => Test::className()]);

        // 更改视图为测试的目录
        $origDirs = $app->view->getOption('dirs');
        $app->view->setDirs([dirname(__DIR__) . '/fixtures/views']);

        ob_start();
        $app->dispatch('test', $action);
        $response = ob_get_clean();

        // 还原视图目录
        $app->view->setDirs($origDirs);

        $this->assertContains($content, $response);
    }

    public function dataForResponse()
    {
        return [
            [
                'suc',
                json_encode(wei()->ret->suc(), JSON_UNESCAPED_UNICODE),
            ],
            [
                'err',
                '{"message":"err","code":-2}'
            ],
            [
                'returnCodeAndMessage',
                '{"code":1,"message":"returnCodeAndMessage"}'
            ],
            [
                'returnOnlyCode',
                'returnOnlyCode'
            ],
            [
                'returnOnlyMessage',
                'returnOnlyMessage'
            ],
            [
                'returnResponse',
                'returnResponse'
            ],
            [
                'returnEmptyArrayWillRenderView',
                'returnEmptyArrayWillRenderView'
            ],
            [
                'returnRetInMiddleware',
                '{"message":"returnRetInMiddleware","code":1}'
            ],
            [
                'returnStringInMiddleware',
                'returnStringInMiddleware'
            ],
            [
                'returnResponseInMiddleware',
                'returnResponseInMiddleware'
            ]
        ];
    }
}
