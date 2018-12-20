<?php
/**
 * BT种子转磁力链接
 * Created by PhpStorm.
 * User: JONE
 * Date: 2018-12-20
 * Time: 16:25
 */

?>


<!doctype html>
<html lang="en">

<?php define('TITLE','首页'); get_temp('header.php') ?>

<style>
    .banner h3{font-family:fantasy;text-decoration:none;color:dodgerblue;}
</style>

<body class="page-body">
<!-- skin-white -->
<div class="page-container">

    <?php get_temp('nav.php') ?>

    <div class="main-content">
        <?php get_temp('nav_top.php') ?>

        <!-- 常用推荐 -->
        <div class="row">
            <div class="col-md-12">
                <div class="banner" id="top">
                    <h3>BT种子转磁力链接</h3>
                    <!-- <h1><a href="/"><img src="/static/logo.png?v=0b9a95c2a548a41826206b4ecff9e6c2"></a> <span class="ft16 mob hidden-xs">m3u8在线播放器 m3u8 player support both PC and Mobile</span></h1> -->
                </div>

                <?php

                $path = 'D:\phpstudy\WWW\example\TorrentToMagnet-master\1122.torrent';//此处填写种子的地址
                $torrent = file_get_contents($path);
                $desc = BDecode($torrent);
                $info = $desc['info'];
                $hash = strtoupper(sha1( BEncode($info) ));
                $magnet = sprintf('magnet:?xt=urn:btih:%s&dn=%s', $hash, $info['name']);
                echo $magnet;

                ?>

            </div>

        </div>
        <br />
        <!-- END 常用推荐 -->


        <?php  get_temp('footer.php') ?>

        <!-- Main Footer -->
        <!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
        <!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
        <!-- Or class "fixed" to  always fix the footer to the end of page -->

    </div>
</div>



<!-- 锚点平滑移动 -->
<?php  get_temp('footer_js.php') ?>


</body>

</html>
