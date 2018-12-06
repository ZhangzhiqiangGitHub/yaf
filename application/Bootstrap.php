<?php
/**
 * @name Bootstrap
 * @author root
 * @desc 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * @see http://www.php.net/manual/en/class.yaf-bootstrap-abstract.php
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */

class Bootstrap extends Yaf_Bootstrap_Abstract {

    /**
     * 初始化配置文件
     */
    public function _initConfig() {

        // 把配置保存起来
        $arrConfig = Yaf_Application::app()->getConfig();
        Yaf_Registry::set('config', $arrConfig);

        // 包含公共文件
        Yaf_Loader::import(APPLICATION_PATH ."/application/library/Common/Common.php");

    }
    
    /**
     * 开启自动加载配置后对应的自动加载类机制
     * @param Dispatcher $dispatcher
     */
    function _initComposerAutoload(Yaf_Dispatcher $dispatcher){
   // var_dump(loader::autoload("\application\modules\Echarts\controllers\AuthController.php"));die;
//        $autoload = APPLICATION_PATH . '/vendor/autoload.php';
//        Yaf_Loader::autoload("Baidu_ST_Dummy_Bar");
//        
//        var_dump(Loader::import($autoload));die;
        //if (file_exists($autoload)) {
//            Loader::import($autoload);
        //}
    }

    public function _initPlugin(Yaf_Dispatcher $dispatcher) {

        //注册一个插件
        $objSamplePlugin = new SamplePlugin();
        $dispatcher->registerPlugin($objSamplePlugin);
    }

    public function _initRoute(Yaf_Dispatcher $dispatcher) {
        //在这里注册自己的路由协议,默认使用简单路由
    }

    public function _initView(Yaf_Dispatcher $dispatcher) {
        //在这里注册自己的view控制器，例如smarty,firekylin
    }
}
