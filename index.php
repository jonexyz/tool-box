<?php
/**
 * TODO 入口页
 *
 * Created by PhpStorm.
 * User: jone
 * Date: 18-12-15
 * Time: 下午12:27
 */

//error_reporting(0);

// 定义根目录
const ROOT = __DIR__;

require_once 'config.php';

require_once './inc/functions.php';


// 自动加载
function auto_load($className){
    $file = ROOT.'/inc/'.$className.".php";

    if(file_exists($file)){
        require $file;
    }
}

// 注册自动加载函数
spl_autoload_register('auto_load');


if(isset($_GET['s']) && $_GET['s'] != '/' ){
    $s = trim($_GET['s']);
}else{
    $s = 'index';
}


require_temp(ROOT.'/template/'.$s.'.php');


