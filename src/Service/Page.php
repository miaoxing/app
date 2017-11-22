<?php

namespace Miaoxing\App\Service;

use miaoxing\plugin\BaseService;
use Wei\Block;

/**
 * 页面
 *
 * @property Block $block
 */
class Page extends BaseService
{
    public function addJs($src)
    {
        $this->block->start('js');

        echo '<script src="' . $src . '"></script>', "\n";

        $this->block->end();

        return $this;
    }

    public function addActionJs($name)
    {
        $path = dirname($this->app->getControllerAction());
        $path = $this->dash($path);

        return $this->addJs($this->wpAsset($path . '/' . $name . '.js'));
    }

    /**
     * @param string $name
     * @return string
     */
    protected function dash($name)
    {
        return strtolower(preg_replace('~(?<=\\w)([A-Z])~', '-$1', $name));
    }
}
