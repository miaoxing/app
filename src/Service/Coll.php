<?php

namespace Miaoxing\App\Service;

class Coll extends \miaoxing\plugin\BaseService
{
    /**
     * Specifies a field to be the key of the array
     *
     * @param array $data
     * @param string $key
     * @return array
     */
    public function indexBy(array $data, $key)
    {
        $newData = [];
        foreach ($data as $row) {
            $newData[$row[$key]] = $row;
        }

        return $newData;
    }

    /**
     * Sort multi-dimensional array
     *
     * @param array $array
     * @param string $key
     * @param int $type
     * @return array
     */
    public function orderBy(array $array, $key = 'sort', $type = SORT_DESC)
    {
        $array2 = [];
        foreach ($array as $k => $v) {
            $array2[$k] = $v[$key];
        }
        array_multisort($array2, $type, $array);

        return $array;
    }

    /**
     * Returns the values from a single column of the input array, identified by
     * the $columnKey.
     *
     * @param array $input
     * @param mixed $columnKey
     * @param mixed $indexKey
     * @return array
     * @link https://github.com/symfony/polyfill/blob/master/src/Php55/Php55ArrayColumn.php
     */
    public function column(array $input, $columnKey, $indexKey = null)
    {
        if (function_exists('array_column')) {
            return call_user_func_array('array_column', func_get_args());
        }

        $output = [];

        foreach ($input as $row) {
            $key = $value = null;
            $keySet = $valueSet = false;

            if ($indexKey !== null && array_key_exists($indexKey, $row)) {
                $keySet = true;
                $key = (string) $row[$indexKey];
            }

            if ($columnKey === null) {
                $valueSet = true;
                $value = $row;
            } elseif (is_array($row) && array_key_exists($columnKey, $row)) {
                $valueSet = true;
                $value = $row[$columnKey];
            }

            if ($valueSet) {
                if ($keySet) {
                    $output[$key] = $value;
                } else {
                    $output[] = $value;
                }
            }
        }

        return $output;
    }
}
