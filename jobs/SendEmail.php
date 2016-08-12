<?php

namespace miaoxing\app\jobs;

use plugins\queue\Job;
use services\BaseJob;

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
