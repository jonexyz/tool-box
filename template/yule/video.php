<?php
/**
 * Created by PhpStorm.
 * User: jone
 * Date: 18-12-16
 * Time: 下午9:08
 */
?>


<!doctype html>
<html lang="en">

<?php define('TITLE','M3U8在线播放器-126工具箱'); get_temp('header.php') ?>

<style>
    #video{width:100%;margin:16px 0;}
    .ft16{font-size:16px}
    .vtitle{word-break:break-all}
    .banner{margin:16px 0;}
    .banner img{height:30px;margin-top:-4px}
    .banner a{font-family:fantasy;text-decoration:none;color:dodgerblue;}
    .bold{font-weight:bold;}
    .breakall{word-break:break-all;}
    .mg320{margin:32px 0;}
    .auto img{max-width:100%;}
    .ln20{line-height:2}
    .mg160{margin:16px 0;}
    .covers li{width:48%;vertical-align:top;padding-right:0}
    .covers img{width:100%;height:200px;}
    .covers p{margin:4px 0;height:40px;}
    .covers .playit{width:64px;height:64px;position:absolute;left:50%;top:50%;margin:-54px 0 0 -24px;}
    .row.covers{margin-right:0}
    .row.covers .col-md-2{padding-right:0}
    .input-group-addon{color:#FFF;background:dodgerblue;border-color: #2e6da4}
    button.play,button.play:hover,button.play:active{background: dodgerblue}
    .gallery img{width:100%}
    .gallery a p{margin:4px 0 0}
    .cover{height:200px;overflow: hidden;}
    @media (min-width: 1200px){.container{width:990px}}
    .clear{clear:both}
    .remove{position: absolute;z-index: 99999;right: 90px;top:8px;}

</style>

<body class="page-body">
<!-- skin-white -->
<div class="page-container">

    <?php get_temp('nav.php') ?>

    <div class="main-content">
        <?php get_temp('nav_top.php') ?>

        <div class="row">
            <div class="col-md-12">
                <div class="banner" id="top">
                    <h3><a href="/"><img src="/static/images/m3u8.png"> M3U8 Player Online</a></h3>
                    <!-- <h1><a href="/"><img src="/static/logo.png?v=0b9a95c2a548a41826206b4ecff9e6c2"></a> <span class="ft16 mob hidden-xs">m3u8在线播放器 m3u8 player support both PC and Mobile</span></h1> -->
                </div>
                <form action="" method="GET" >
                    <div class="input-group">
                        <input type="text" class="form-control"
                               value="https://video-dev.github.io/streams/x36xhzz/x36xhzz.m3u8" name="play" required>
                        <a href="javascript:;" class="remove"><span class="glyphicon glyphicon-remove"
                                                                    aria-hidden="true"></span></a>
                        <span class="input-group-btn">
<!-- <button type="button" name="remove" class="btn btn-default"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button> -->
<button class="btn btn-primary play" type="submit"><span class="glyphicon glyphicon-play" aria-hidden="true"></span> PLAY</button>
</span>
                    </div><!-- /input-group -->
                </form>
                <div class="text-center">
                    <video id="video" controls="controls" autoplay="autoplay"
                           poster="http://freefrontend.com/assets/img/css-loaders/cube-flipping-loader.gif"></video>
                </div>
                <div class="alert alert-info text-center vtitle" role="alert"><b>正在播放!</b>
                    https://video-dev.github.io/streams/x36xhzz/x36xhzz.m3u8
                </div>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <p><strong>M3U8</strong>文件是指UTF-8编码格式的M3U文件。M3U文件是记录了一个索引纯文本文件，打开它时播放软件并不是播放它，而是根据它的索引找到对应的音视频文件的网络地址进行在线播放。
                        </p>
                        <p><strong>M3U</strong>是一种播放多媒体列表的文件格式，它的设计初衷是为了播放音频文件，比如MP3，但是越来越多的软件现在用来播放视频文件列表，M3U也可以指定在线流媒体音频源。很多播放器和软件都支持M3U文件格式。
                        </p>

                    </div>
                </div>

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

<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
<script type="text/javascript" src="/static/js/m3u8play.js?v=74b4c09fcd6e74ab82eb02a08c88b338"></script>
<script type="text/javascript"><?php if(!empty(trim($_GET['play']))){ ?> m3u8play("<?=trim($_GET['play']) ?>" <?php } ?>)</script>

<!-- 锚点平滑移动 -->
<?php  get_temp('footer_js.php') ?>


</body>

</html>

