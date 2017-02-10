<?php

namespace Miaoxing\App\Job;

use Miaoxing\Queue\Job;
use Miaoxing\Queue\Service\BaseJob;

class SendEmail extends Job
{
    public function __invoke(BaseJob $job, $data)
    {
        wei()->appDb('orderLog')->save([
            'orderId' => 1,
            'note' => (string)$data['note'],
        ]);
        $job->delete();
    }
}
