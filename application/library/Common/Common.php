<?php

/**
 * @name Common
 * @author zhangzhiqiang
 * @desc 公共类
 */

class Common {
    
    protected static $_instances = array();
    protected $db;
    
    public function __construct(){
//        
//        $this->db = Db::getInstance('master');
        $this->input = Service::getInstance('HttpRequest','Common');
    }
    
    /**
     * 实例化service对象
     * @param string $className 类名
     * @param string $config 实例化配置
     * @author zhangzhiqiang
     * @return object
     */
    public static function getService($className, $config = ''){

        $fileName = str_replace('Service', 'service', str_replace('_', '/', $className));

        // 包含类文件
        Yaf_Loader::import(APPLICATION_PATH ."/application/modules/". $fileName .'.php');
        
        if (!isset(self::$_instances[$className])) {
            self::$_instances[$className] = new $className($config);
        }
        
        return self::$_instances[$className];
    }
    
    /**
     * 实例化business对象
     * @param $name 类名
     * @author zhangzhiqiang
     * @return object
     */
    public static function getBusiness($name, $config = ''){
        
        $modelName = $name;
        
        if (!isset(self::$_instances[$modelName])) {
            self::$_instances[$modelName] = new $modelName($config);
        }
        
        return self::$_instances[$modelName];
    }
    
    /**
     * 实例化model对象
     * @param $name 类名
     * @author zhangzhiqiang
     * @return object
     */
    public static function getModel($name, $resource='Models',$config=''){
        
        $modelName = $name;
        
        if (!isset(self::$_instances[$modelName])) {
            self::$_instances[$modelName] = new $modelName($config);
        }
        
        return self::$_instances[$modelName];
    }
    
   
}


/**
 * 打印数据
 * @param type $data
 */
function dd($data){
    var_dump($data);die;
}