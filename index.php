<?php

/**
 * 项目启动文件
 * 默认开启命名空间
 */

header('content-Type:text/html;charset=utf-8;');

//error_reporting(0);
define('APPLICATION_PATH', dirname(__FILE__));

$application = new Yaf_Application( APPLICATION_PATH . "/conf/application.ini");


// 当前的环境名，也就是ini_get("yaf.environ")
// var_dump($application->environ());die;

// 启用bootstrap加载引导程序
$application->bootstrap()->run();

?>
