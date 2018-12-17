<?php
/**
 * 系统日志类
 *
 * Created by PhpStorm.
 * User: jone
 * Date: 18-12-15
 * Time: 下午12:57
 */
class Log
{
    public static function log($content, $file = 'error.log')
    {
        $path = ROOT. '/data/log/';
        if(!is_dir($path)) mkdir($path);
        $filename = $path . $file;
        $fp = fopen($filename, 'a+');
        $now = date('Y-m-d H:i:s');
        fwrite($fp, "{$now}----\n");
        fwrite($fp, $content);
        fwrite($fp, "\n");
        fclose($fp);
    }
}