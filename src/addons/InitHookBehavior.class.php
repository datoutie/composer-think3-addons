<?php
namespace Addon\Behavior;
use Think\Behavior;
use Think\Hook;
// 初始化钩子信息
class InitHookBehavior extends Behavior {

    // 行为扩展的执行入口必须是run
    public function run(&$content){
        //模块/插件
        $addons = C('ADDONS_LIST');
        if (empty($data)) {
            // 初始化钩子
            foreach ($addons as $key => $values) {
                if (is_string($values)) {
                    $values = explode(',', $values);
                } else {
                    $values = (array)$values;
                }
                $addons[$key] = array_filter(array_map('get_addon_class', $values));
                \think\Hook::add($key, $addons[$key]);
            }
           
        } else {
            \think\Hook::import($data, false);
        }
    }
}