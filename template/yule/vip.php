<?php
/**
 * Created by PhpStorm.
 * User: jone
 * Date: 18-12-21
 * Time: 上午09:50
 */
?>

<!doctype html>
<html lang="en">

<?php define('TITLE','在线VIP视频解析-126工具箱'); get_temp('header.php') ?>
<style>
    .banner h3{font-family:fantasy;text-decoration:none;color:dodgerblue;}
    .language {
        text-align: center;
        margin: 0 auto;
        position: relative;
        padding-top: 10px;
    }
    .btn2 {
        display: inline-block;
        vertical-align: top;
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        font-size: 14px;
        line-height: 1;
        text-align: center;
        text-decoration: none;
        color: #5cb85c;
        margin: 5px;
        border: none;
        border-radius: 3px;
        box-shadow: none;
        cursor: pointer;
        background: #eeeded;
        padding: 20px 20px;
        height: 2.3em;
    }
    .btn2:link {
        color: #FFFFFF;
        background: #5cb85c;
    }

    .btn2:visited {
        color: #FFFFFF;
        background: #5cb85c;
    }

    .btn2:hover {
        color: #5cb85c;
        background: #FFFFFF;
    }

    .btn2:active {
        color: #FFFFFF;
        background: #5cb85c;
    }
    .btn-outline2 {
        background: none;
        border: 3px solid #5cb85c;
        *height: 15px;
        margin-right: 14px;
        padding-top: 5px;
        padding-right: 20px;
        padding-bottom: 5px;
        padding-left: 20px;
    }
</style>

<body class="page-body">
<!-- skin-white -->
<div class="page-container">

    <?php get_temp('nav.php') ?>

    <div class="main-content">
        <?php get_temp('nav_top.php') ?>

        <div class="row" >
            <div class="col-md-12" >

                <div class="banner" id="top">
                    <h3>M3U8 Player Online</h3>
                    <!-- <h1><a href="/"><img src="/static/logo.png?v=0b9a95c2a548a41826206b4ecff9e6c2"></a> <span class="ft16 mob hidden-xs">m3u8在线播放器 m3u8 player support both PC and Mobile</span></h1> -->
                </div>

                <script>
                    $(function () {
                        $('.btn-primary').click(function () {
                            var key = $('.form-control').val();
                            console.log('key ',key);
                            if (key != '' && key != null) {
                                window.location = '/search/' + key
                            }
                        });
                        $('.form-control').keyup(function (e) {
                            console.log('kwyup ',e.keyCode );
                            if (e.keyCode == 13) {
                                $(".btn-primary").click();
                            }

                        });
                        $('#shebei').text('.navbar .nav > li .dropdown-menu {margin: 1px;}.navbar .nav > li:hover .dropdown-menu {display: block;}');    });
                </script>

                <script type="text/javascript">
                    eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('b a(){0 6=1.2("9").4;0 5=1.2("3");0 3=1.2("3").c;0 8=5.e[3].4;0 7=1.2("f");7.d=8+6}',16,16,'var|document|getElementById|jk|value|jkurl|diz|cljurl|jkv|url|dihejk|function|selectedIndex|src|options|player'.split('|'),0,{}))

                    function dihejk2() {
                        var diz = document.getElementById("url").value;
                        var jkurl = document.getElementById("jk");
                        var jk = document.getElementById("jk").selectedIndex;
                        var jkv = jkurl.options[jk].value;
                        var cljurl = document.getElementById("player");
                        window.open(jkv + diz,"_blank");
                    }

                </script>

                <!--<span class="zzjz">正在使出吃奶的劲加载中...</span>-->
                <!--<div class="loader">
                    <div class="loader-inner">
                        <div class="loader-line-wrap">
                            <div class="loader-line"></div>
                        </div>
                        <div class="loader-line-wrap">
                            <div class="loader-line"></div>
                        </div>
                        <div class="loader-line-wrap">
                            <div class="loader-line"></div>
                        </div>
                        <div class="loader-line-wrap">
                            <div class="loader-line"></div>
                        </div>
                        <div class="loader-line-wrap">
                            <div class="loader-line"></div>
                        </div>
                    </div>
                </div>-->


                    <div id="video">

                        <!--<iframe id="ifrvideo" allowfullscreen="true" scrolling="no" allowtransparency="true" src=""
                                style="width:100%;border:none;height: 50%;"></iframe>-->
                        <div id="kj" class="panel-body">
                            <iframe src="/ks.html" id="player" allowtransparency="true" allowfullscreen="true" scrolling="no" width="100%" height="600px" frameborder="0"></iframe>
                        </div>

                    </div>
                    <div id="playlist">
                        <ul>
                            <form method="get" id="1233911832"></form>
                            <div class="input-group" style="width: 100%;">
                                <span class="input-group-addon input-lg" style="width: 80px; ">选择接口</span>
                                <select class="form-control input-lg" id="jk">
                                    <option value="http://api.ledboke.com/?url=" selected="selected">④号通用vip引擎系统【三通道+速度快+稳定】</option>
                                    <!--<option value="http://api.baiyug.cn/vip/index.php?url=" >③号通用vip引擎系统【无广告+稳定通用】</option>-->
                                    <option value="http://api.bbbbbb.me/jx/?url="">②号通用vip引擎系统【无广告+稳定通用】</option>
                                    <option value="http://17kyun.com/api.php?url=">①号通用vip引擎系统【稳定通用】</option>
                                </select>
                            </div>
                            <br>
                            <div class="input-group" style="width: 100%;">
                                <span class="input-group-addon input-lg" style="width: 80px;">播放地址</span>
                                <input class="form-control input-lg" type="search" placeholder="电脑使用Ctrl+V粘贴网址-手机直接长按粘贴网址" id="url">
                            </div>
                            <br>
                            <div>
                                <button id="bf" type="button" class="btn btn-success btn-lg btn-block" onclick="dihejk()">Go-点击开始解析
                                </button>
                                <button id="bf" type="button" class="btn btn-success btn-lg btn-block" onclick="dihejk2()">New-点击全屏解析
                                </button>
                            </div>

                            <div class="language">
                                <a class="btn2 btn-outline2" href="http://www.le.com/" rel="nofollow" target="_blank">进入乐视视频</a>
                                <a class="btn2 btn-outline2" href="http://www.iqiyi.com/" rel="nofollow" target="_blank">进入奇艺视频</a>
                                <a class="btn2 btn-outline2" href="http://www.mgtv.com/" rel="nofollow" target="_blank">进入芒果视频</a>
                                <a class="btn2 btn-outline2" href="http://www.tudou.com/" rel="nofollow" target="_blank">进入土豆视频</a>
                                <br>
                                <a class="btn2 btn-outline2" href="http://v.qq.com/" rel="nofollow" target="_blank">进入腾讯视频</a>
                                <a class="btn2 btn-outline2" href="http://www.youku.com/" rel="nofollow" target="_blank">进入优酷视频</a>
                                <a class="btn2 btn-outline2" href="http://tv.sohu.com/" rel="nofollow" target="_blank">进入搜狐视频</a>
                                <a class="btn2 btn-outline2" href="http://www.pptv.com/" rel="nofollow" target="_blank">进入pptv视频</a>
                            </div>
                        </ul>
                    </div>

                <div class="container">
                    <div id="footer">
                        <p class="text-center">Copyright © 2018 - <a href=""
                                                                     target="_blank">极客</a> Corporation,All Rights
                            Reserved
                        </p>
                        <p class="text-center">本站提供的最新电影和电视剧资源均系收集于各大视频网站,本站只提供web页面服务,并不提供影片资源存储,也不参与录制、上传<br/>
                            若本站收录的节目无意侵犯了贵司版权，请给网页底部邮箱地址来信,我们会及时处理和回复,谢谢。<br/>
                            管理员邮箱：<a href="mailto:377873042@qq.com">377873042@qq.com</a>
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
<!-- 锚点平滑移动 -->
<?php  get_temp('footer_js.php') ?>

</body>

</html>

