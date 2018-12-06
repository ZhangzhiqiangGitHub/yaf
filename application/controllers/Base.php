<?php
/**
 * @name BaseController
 * @author zhangzhiqiang
 * @desc 控制器基类
 */

class BaseController extends Yaf_Controller_Abstract {

    /** 
     * 默认动作
     * Yaf支持直接把Yaf_Request_Abstract::getParam()得到的同名参数作为Action的形参
     * 对于如下的例子, 当访问http://yourhost/sample/index/index/index/name/root 的时候, 你就会发现不同
     */
    public function init() {

    }
}
