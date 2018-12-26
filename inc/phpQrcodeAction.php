<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-12-26
 * Time: 11:37
 */

class phpQrcodeAction
{
    public function __construct()
    {
        include_once ROOT.'/inc/phpqrcode.php';
    }

    /**
     * @param string $url  传入URL参数
     * @return string  返回图片路径
     */
    public function scerweima($url=''){

        $value = $url;         //二维码内容
        $errorCorrectionLevel = 'L';  //容错级别
        $matrixPointSize = 5;      //生成图片大小
        //生成二维码图片
        $filename = 'qrcode/'.microtime().'.png';
        QRcode::png($value,$filename , $errorCorrectionLevel, $matrixPointSize, 2);
        $QR = $filename;        //已经生成的原始二维码图片文件
        $QR = imagecreatefromstring(file_get_contents($QR));
        //输出图片
        imagepng($QR, 'qrcode/qrcode.png');
        imagedestroy($QR);
        return  get_url().'/'.$filename;
    }


    /**
     * @param string $url
     * @return 无返回值,直接输出图片
     */
    function scerweima2($url=''){

        $value = $url;         //二维码内容
        $errorCorrectionLevel = 'L';  //容错级别
        $matrixPointSize = 5;      //生成图片大小
        //生成二维码图片
         QRcode::png($value,false,$errorCorrectionLevel, $matrixPointSize, 2);
    }


}