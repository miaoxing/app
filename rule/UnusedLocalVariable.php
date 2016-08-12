<?php

namespace miaoxing\app\rule;

use PHPMD\AbstractNode;
use PHPMD\Rule\UnusedLocalVariable as BaseUnusedLocalVariable;

class UnusedLocalVariable extends BaseUnusedLocalVariable
{
    /**
     * {@inheritdoc}
     */
    public function apply(AbstractNode $node)
    {
        // 如果包含了get_defined_vars,认为所有的变量已使用
        foreach ($node->findChildrenOfType('FunctionPostfix') as $func) {
            if ($this->isFunctionNameEndingWith($func, 'get_defined_vars')) {
                return;
            }
        }
        parent::apply($node);
    }
}
