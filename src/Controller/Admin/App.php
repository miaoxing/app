<?php

namespace Miaoxing\App\Controller\Admin;

class App extends \miaoxing\plugin\BaseController
{
    public function editAction()
    {
        $appRecord = $this->app->getRecord();

        return get_defined_vars();
    }

    public function updateAction($req)
    {
        $validator = wei()->validate([
            'data' => $req,
            'rules' => [
                'domain' => [
                    'required' => false,
                    'callback' => function ($domain) {
                        return $this->isDomain($domain);
                    },
                ],
            ],
            'messages' => [
                'callback' => '域名格式不正确',
            ],
        ]);

        if (!$validator->isValid()) {
            return $this->err($validator->getFirstMessage());
        }

        $appRecord = wei()->app->getRecord();
        $appRecord->save([
            'domain' => (string) $req['domain'],
        ]);

        // 移除域名的缓存
        $this->cache->remove('appDomain' . $req['domain']);

        return $this->suc();
    }

    protected function isDomain($domain)
    {
        return preg_match("/^([a-z\d](-*[a-z\d])*)(\.([a-z\d](-*[a-z\d])*))*$/i", $domain) //valid chars check
            && preg_match('/^.{1,253}$/', $domain) //overall length check
            && preg_match("/^[^\.]{1,63}(\.[^\.]{1,63})*$/", $domain); //length of each label
    }
}
