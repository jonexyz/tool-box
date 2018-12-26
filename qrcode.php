<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-12-26
 * Time: 14:05
 */

// 二维码直接输出接口

// 定义根目录
const ROOT = __DIR__;

include_once './inc/phpQrcodeAction.php';
include_once './inc/functions.php';

if( ! empty($_GET['url'])){
    $url = trim($_GET['url']);
    (new phpQrcodeAction())->scerweima2($url);
}
