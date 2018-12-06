<?php
/**
 * @name IndexController
 * @author root
 * @desc 默认控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */

//namespace application\modules\Echarts\controllers;  愚昧的 
// yaf文件自动加载
// 1、命名空间：yaf的本身设计就是依据命名空间定义设计的，根目录为最大的命名空间，使用类名不同来定义不同类的作用，个人认为不必使用命名空间
// 2、如果你new一个类或者直接使用一个类，yaf自动加载机制会依据类名按照下划线分割成路径去寻找这个类，路径起始位置为application.ini配置的application.library
// 3、yaf开启使用自建程序加载 yaf.use_spl_autoload 为1的情况下，yaf本身的加载机制依旧会加载文件，如果找不到则使用自动加载的代码加载，所以会消耗性能

Yaf_Loader::import(APPLICATION_PATH ."/application/modules/Echarts/controllers/Auth.php");

class IndexController extends AuthController {

    public function init(){
        parent::init();
    }
    
   /** 
    * 默认动作
    * Yaf支持直接把Yaf_Request_Abstract::getParam()得到的同名参数作为Action的形参
    */
    public function indexAction() {


        echo Echarts_Config_config::$a;die;
        
        die;
        $a = Common::getBusiness('Echarts_business_Echarts');
        var_dump($a->index());die;
        $obj = Common::getService('Echarts_Service_Echarts');
        dd($obj);
        echo $obj->index();
        echo 666;die;
        // 获取当前application实例
        //var_dump(Yaf_Application::app());die;

        // 读取项目配置项
        //var_dump(Yaf_Application::app()->getConfig('application'));die;

        // 获取声明的modules
        //var_dump(Yaf_Application::app()->getModules());die;

        //
        echo 5;die;
        return TRUE;
    }
}
