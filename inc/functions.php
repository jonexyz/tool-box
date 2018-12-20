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

/**
 * 获取当前的域名+url
 * @param bool $type  true则获取完整url ,false 只获取http+主机域名
 * @return string
 */
function get_url($type=false)
{
    $http_type = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) ? 'https://' : 'http://';
    if($type){
        return $http_type . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    }
    return $http_type . $_SERVER['HTTP_HOST'] ;
}


// bt种子转磁力链接操作
function BDecode($wholefile) {
    $decoder = new BDecode;
    $return = $decoder->decodeEntry($wholefile);
    return $return[0];
}

function BEncode($array) {
    $string = '';
    $encoder = new BEncode;
    $encoder->decideEncode($array, $string);
    return $string;
}