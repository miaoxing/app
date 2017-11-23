<?php

namespace Miaoxing\App\Service;

use miaoxing\plugin\BaseService;
use Wei\Block;

/**
 * 页面
 *
 * @property Block $block
 * @method string wpAsset($file)
 */
class Page extends BaseService
{
    public function addJs($src)
    {
        $this->block->start('js');

        foreach ((array)$src as $item) {
            echo '<script src="' . $item . '"></script>', "\n";
        }

        $this->block->end();

        return $this;
    }

    public function addCss($src)
    {
        $this->block->start('css');

        echo ' <link rel="stylesheet" href="' . $src . '" />', "\n";

        $this->block->end();

        return $this;
    }

    public function addActionJs($name)
    {
        $path = dirname($this->app->getControllerAction());
        $path = $this->dash($path);

        // TODO 完善后再移到布局中
        $this->addCss($this->wpAsset('common.css'));

        return $this->addJs([
            $this->wpAsset('manifest.js'),
            $this->wpAsset('common.js'),
            $this->wpAsset($path . '/' . $name . '.js')
        ]);
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
