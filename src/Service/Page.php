<?php

namespace Miaoxing\App\Service;

use miaoxing\plugin\BaseService;
use Miaoxing\Plugin\Service\Asset;
use Wei\Block;
use Wei\View;

/**
 * 页面
 *
 * @property-read View $view
 * @property-read Block $block
 * @property-read Asset $wpAsset
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

    /**
     * @param string $action
     * @return Page
     * @todo 逐步改为react-router来加载
     */
    public function addReactJs($action = 'index')
    {
        $path = dirname($this->app->getControllerAction());
        $path = $this->dash($path . '/' . $action);

        // TODO 完善后再移到布局中
        //$this->addCss($this->wpAsset('admin.css'));

        // 配合admin.js加载对应的容器
        $js = $this->view->get('js');
        $js['reactContainer'] = $path;
        $this->view->assign('js', $js);

        return $this->addJs([
            $this->wpAsset('manifest.js'),
            $this->wpAsset('admin.js')
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
