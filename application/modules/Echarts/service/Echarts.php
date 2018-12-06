<?php
/**
 * @name IndexController
 * @author root
 * @desc 默认控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */

class Echarts_Service_Echarts {

   /** 
    * 默认动作
    * Yaf支持直接把Yaf_Request_Abstract::getParam()得到的同名参数作为Action的形参
    * 对于如下的例子, 当访问http://yourhost/sample/index/index/index/name/root 的时候, 你就会发现不同
    */
    public function index() {
        echo 444;die;
        // 获取当前application实例
        //var_dump(Yaf_Application::app());die;œ

        // 读取项目配置项
        //var_dump(Yaf_Application::app()->getConfig('application'));die;

        // 获取声明的modules
        //ar_dump(Yaf_Application::app()->getModules());die;

        //
        echo 5;die;
        return TRUE;
    }
}
