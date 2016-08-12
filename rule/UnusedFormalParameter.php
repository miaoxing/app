<?php

namespace miaoxing\app\rule;

use PHPMD\AbstractNode;
use PHPMD\Rule\UnusedFormalParameter as BaseUnusedFormalParameter;

class UnusedFormalParameter extends BaseUnusedFormalParameter
{
    protected $patterns = [
        '/\\\\controllers\\\\(.+?)::(.+?)Action\(\)$/', // 控制器方法
        '/\\\\Plugin::on(.+?)\(\)$/', // 插件事件
    ];

    /**
     * {@inheritdoc}
     */
    public function apply(AbstractNode $node)
    {
        $name = $node->getFullQualifiedName();
        foreach ($this->patterns as $pattern) {
            if (preg_match($pattern, $name)) {
                return;
            }
        }

        parent::apply($node);
    }
}
