<?php

namespace Miaoxing\App\Service;

use Miaoxing\Plugin\BaseService;
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

        foreach ((array) $src as $item) {
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
     * @param string|null $action
     * @return Page
     * @todo 逐步改为react-router来加载
     */
    public function addReactJs($action = null)
    {
        $this->initRoute($action);

        // TODO 完善后再移到布局中
        //$this->addCss($this->wpAsset('admin.css'));

        return $this->addJs([
            $this->wpAsset('manifest.js'),
            $this->wpAsset('admin.js'),
        ]);
    }

    /**
     * 增加插件的资源
     *
     * @param string|null $action
     * @return $this
     */
    public function addPluginAsset($action = null)
    {
        // 1. 设置路由
        $this->initRoute($action);

        // 2. 加载插件的版本映射表
        // 目前正常只会加载一次，不用缓存
        $plugin = $this->app->getPlugin();
        $this->wpAsset->addRevFile('dist2/' . $plugin . '-assets-hash.json');

        // 3. 加载css和js文件
        $this->addCss($this->wpAsset($plugin . '.css'));
        $this->addJs($this->wpAsset($plugin . '.js'));

        return $this;
    }

    protected function initRoute($action)
    {
        $route = $this->app->getController() . '/' . ($action ?: $this->app->getAction());

        // 配合admin.js加载对应的容器
        $js = $this->view->get('js');
        $js['route'] = $route;
        $this->view->assign('js', $js);
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
