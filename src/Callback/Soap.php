<?php

namespace Miaoxing\App\Callback;

abstract class Soap
{
    static function beforeSend(\Wei\Soap $soap, \SoapClient $soapClient)
    {
        wei()->logger->debug(array(
            'Request URL' => $soap->getUrl(),
            'Request Method' => $soap->getMethod(),
            'Parameters' => $soap->getData(),
        ));
    }

    /**
     * SOAP请求发送成功的回调
     *
     * @param $data
     * @param \Wei\Soap $soap
     */
    static function success($data, \Wei\Soap $soap)
    {
        // 按需记录
    }

    /**
     * SOAP请求发送失败的回调,记录错误原因和异常堆栈
     *
     * @param \Wei\Soap $soap
     */
    static function error(\Wei\Soap $soap)
    {
        $e = $soap->getErrorException();
        wei()->logger->error([
            'faultstring' => $e->faultstring,
            'faultcode' => $e->faultcode,
            'faultcodens' => $e->faultcodens,
            'Exception' => (string)$e,
        ]);
    }

    /**
     * SOAP请求发送完成的回调,记录花费时间
     *
     * @param \Wei\Soap $soap
     * @param \SoapClient $soapClient
     */
    static function complete(\Wei\Soap $soap, \SoapClient $soapClient = null)
    {
        if ($soapClient && wei()->isDebug()) {
            wei()->logger->debug([
                'Request Body' => $soapClient->__getLastRequest(),
                'Response Body' => $soapClient->__getLastResponse()
            ]);
        }
    }
}
