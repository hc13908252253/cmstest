<?php
/**
 * Created by PhpStorm.
 * User: haiqing si
 * Date: 2018/6/5
 * Time: 11:42
 */
function module_category($mode='all'){
    static $result=[];
    if (empty($result)){
        $result=['id'=>[],'pid'=>[[]]];//定义数组用于保存结果
        $data=db_fetch(DB_ALL,'select `id`,`name`,`pid`,`sort` from `cms_catgory` order by `pid` ASC,`sort` ASC');
            //创建数组索引，方便查找
        foreach ($data as $v){
            $result['id'][$v['id']]=$v;//基于ID创建数组索引
            $result['pid'][$v['pid']]=$v;//基于PID创建数组索引
        }
    }
    return isset($result[$mode]) ? $result[$mode] : $result;
}