<?php
/**
 * TODO 简单文件缓存类
 *
 * Created by PhpStorm.
 * User: jone
 * Date: 18-12-15
 * Time: 下午12:58
 */
class FileCache
{
    private static $path = ROOT.'/data/cache/';  // 设置缓存文件夹存储位置


    /**
     * 创建缓存文件
     */
    private static function filePath($dir) {
        if(!is_dir($dir)){
            if(!self::filePath(dirname($dir))){
                return false;
            }
            if(!mkdir($dir,0777)){
                return false;
            }
        }
        return true;
    }

    /**
     * 读取缓存
     * @param $key
     * @return null
     */
    public static function get($key) {

        $path = self::$path;

        self::filePath($path);

        $filename = $path. $key;
        if(is_file($filename)) {
            $data = @unserialize(file_get_contents($filename));

            if($data['time']){
                if($data['time'] > time()){
                    return $data['data'];
                }else{
                    @unlink($filename);
                    return null;
                }
            }else{
                return $data['data'];
            }

        }
        return null;
    }

    /**
     * 设置缓存
     * @param $key
     * @param $value
     * @param int $time
     */
    public static function set($key, $value, int $time = 0) {
        $path = self::$path;

        self::filePath($path);

        if($time) $time = time() + $time;

        $data = [
            'data'=>$value,
            'time'=>$time
            ];

        $filename = $path . $key;

        if(isset($value)) {
            file_put_contents($filename, serialize($data));
        } else {
            @unlink($filename);
        }
    }

}