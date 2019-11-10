<?php
/**
 * Created by PhpStorm.
 * User: zhanghy<zhanghongyan@100tal.com>
 * Date: 2019-11-04
 * Time: 23:52
 */

namespace Zanehy\SqlMonitor;

class SqlMonitor
{

    public $sqlQuery;

    /**
     * 测试输出执行
     * @auther zhanghy<zhanghongyan@100tal.com>
     * @Date 2019-11-04
     */
    public function printRunning()
    {
        echo "printRunning running";
    }

    public function addQuery($sql)
    {
        $this->sqlQuery = $sql;
    }

    public function getQuery()
    {
        dd("getQuery", $this->sqlQuery);
    }




}

