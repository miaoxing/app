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

        echo '<script src="' . $src . '"></script>';

        $this->block->end();
    }

    public function addActionJs($name)
    {
        $path = dirname($this->app->getControllerAction());

        return $this->addJs($this->wpAsset('js/' . $path . '/' . $name . '.js'));
    }
}
