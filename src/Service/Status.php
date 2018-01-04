<?php

namespace Miaoxing\App\Service;

use Wei\Record;

/**
 * 状态
 */
class Status extends \Miaoxing\Plugin\BaseService
{
    /**
     * 根据模板创建一份新的状态配置,多出的状态会被移除
     *
     * @param array $allConfigs 所有的状态配置
     * @param array $tplConfigs 模板的状态配置
     * @return array
     */
    public function create(array $allConfigs, array $tplConfigs)
    {
        // tpl的值覆盖all的值
        return array_replace_recursive(
            array_intersect_key($allConfigs, $tplConfigs), // 剩下all的值
            array_intersect_key($tplConfigs, $allConfigs) // 剩下tpl的值
        );
    }

    /**
     * 根据模板创建一份新的状态配置,允许加入新的状态
     *
     * @param array $allConfigs
     * @param array $tplConfigs
     * @return array
     * @todo 待和create合并
     */
    public function createWithNewStatuses(array $allConfigs, array $tplConfigs)
    {
        return array_replace_recursive(
            array_intersect_key($allConfigs, $tplConfigs), // 剩下all的值
            $tplConfigs
        );
    }

    /**
     * 获取指定状态名称的配置,如果名称不存在,返回默认(未指定则第一个)配置
     *
     * @param string $reqStatus
     * @param array $configs
     * @param bool|false|int $defaultId 默认的状态,数字形式
     * @return mixed
     */
    public function req($reqStatus, array $configs, $defaultId = false)
    {
        $key = array_search($reqStatus, $this->coll->column($configs, 'name', 'id'));
        if ($key === false) {
            $key = $defaultId;
        }

        if ($key === false) {
            $config = current($configs);
        } else {
            $config = $configs[$key];
        }

        return $config['name'];
    }

    /**
     * 调用状态相应的方法
     *
     * @param Record $record
     * @param string $status
     * @return mixed
     */
    public function query($record, $status)
    {
        // 1. 触发自身的查询
        $method = lcfirst(str_replace('-', '', ucwords($status, '-')));
        if (method_exists($record, $method)) {
            $record->$method();
        }

        // 2. 触发事件查询
        $event = $record->getTable() . 'Query' . ucfirst($method);
        $this->event->trigger($event, [$record]);
    }
}
