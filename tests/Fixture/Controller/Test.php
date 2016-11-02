<?php

namespace MiaoxingTest\App\Fixture\Controller;

use MiaoxingTest\App\Fixture\middleware\ReturnResponse;
use MiaoxingTest\App\Fixture\middleware\ReturnRet;
use MiaoxingTest\App\Fixture\middleware\ReturnString;
use Wei\RetTrait;

class Test extends \Wei\BaseController
{
    use RetTrait;

    public function __construct(array $options = [])
    {
        parent::__construct($options);

        $this->middleware(ReturnRet::className(), ['only' => 'returnRetInMiddleware']);
        $this->middleware(ReturnString::className(), ['only' => 'returnStringInMiddleware']);
        $this->middleware(ReturnResponse::className(), ['only' => 'returnResponseInMiddleware']);
    }

    public function sucAction()
    {
        return $this->suc();
    }

    public function errAction()
    {
        return $this->err('err', -2);
    }

    public function returnCodeAndMessageAction()
    {
        $code = 1;
        $message = 'returnCodeAndMessage';
        return get_defined_vars();
    }

    public function returnOnlyCodeAction()
    {
        $code = 1;
        return get_defined_vars();
    }

    public function returnOnlyMessageAction()
    {
        $message = 'message';
        return get_defined_vars();
    }

    public function returnResponseAction()
    {
        return $this->response->setContent('returnResponse');
    }

    public function returnEmptyArrayWillRenderViewAction()
    {
        return get_defined_vars();
    }

    public function returnRetInMiddlewareAction()
    {
        throw new \Exception('test error');
    }

    public function returnStringInMiddlewareAction()
    {
        throw new \Exception('test error');
    }

    public function returnResponseInMiddlewareAction()
    {
        throw new \Exception('test error');
    }

    public static function className()
    {
        return get_called_class();
    }
}
