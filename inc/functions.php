<?php
/**
 * TODO 函数封装文件夹
 *
 * Created by PhpStorm.
 * User: jone
 * Date: 18-12-15
 * Time: 下午12:07
 */




// 打印调试
function dd($str){
    echo '<pre>';
    var_dump($str);
    echo '</pre>';
    die();
}

/**
 * 路由分配函数
 * @param $temp 绝对路径
 */
function require_temp($temp){
    if(empty($temp)){
        require ROOT.'/template/index.php';
    }else{
        if(is_file($temp)){
            require $temp;
        }else{
            require ROOT.'/template/404.php';
        }
    }
}

// 引入摸版
function get_temp($tmp){
    $file = ROOT.'/template/base/'.$tmp;
    if(is_file($file)){
        require(ROOT.'/template/base/'.$tmp);
    }
}
