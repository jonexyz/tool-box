<?php
/**
 * Created by PhpStorm.
 * User: jone
 * Date: 18-12-21
 * Time: 上午 10:26
 */



?>

<!doctype html>
<html lang="en">

<?php define('TITLE','短网址生成工具-126工具箱'); get_temp('header.php') ?>

<style>
    .banner h3{
        font-family:fantasy;
        text-decoration:none;
        color:dodgerblue;
        width: 100%;
        /*text-align: center;*/
    }

    /** main content css */
    .lin_main {
        margin: 0;
    }

    .lin-block {
        background-color: #FFF;
        margin: 10px 0;
        border: 1px solid #DDD;
        min-height: 450px;
        border-radius: 3px
    }

    .lin-block-title {
        width: 98%;
        height: 48px;
        line-height: 50px;
        border-bottom: 1px solid #ddd;
        margin: 0 auto;
    }

    .lin-block-title h1 {
        font-size: 26px;
        color: #10454a;
        padding: 0 2px;
    }

    .lin-block-content {
        padding: 6px 10px;
        /*position: relative;*/
    }

    /** tools css*/
    .tools-div {
        margin: 0;
        width: 60%;
        /*background-color: #FFF;*/
        padding: 20px 10px;
        text-align: left;
    }

    .tools-input {
        width: 50%;
        height: 34px;
        line-height: 34px;
        border: 1px solid #40add6;
        margin: 10px 0 30px 0;
        padding: 0 5px;
        display: block;
        font-size: 16px;
    }

    .tools-h3 {
        font-size: 18px;
        font-weight: 300;
        color: #0f5e6b;
    }

    .tools-textarea {
        width: 100%;
        height: 60px;
        border: 1px solid #40add6;
        margin: 10px 0 30px 0;
        display: block;
        padding: 5px 2px;
    }

    .tools-result {
        /*min-width: 50%;*/
        margin: 20px 0;
        text-align: left;
        line-height: 30px;
        font-size: 20px;
        background-color: #bbdde2;
        padding: 5px;
        border: 1px solid #40add6;
        display: none;
        color: #117342
    }

    .tools-loading {
        margin-left: 40px;
        display: none;
    }


</style>

<body class="page-body">
<!-- skin-white -->
<div class="page-container">

    <?php get_temp('nav.php') ?>

    <div class="main-content">
        <?php get_temp('nav_top.php') ?>

        <!-- 主体内容 -->
        <div class="row" >
            <div class="col-md-12" >
                <div class="banner" id="top">
                    <h3>百度短网址生成工具</h3>
                </div>

                <div class="lin-block-content">
                    <div class="tools-div">
                        <h3 class="tools-h3">输入你要简化的URL网址:</h3>
                        <textarea class="tools-textarea" name="long_url"></textarea>
                        <input type="button" class="form_btn blue" onClick="input_search()" value="压缩网址"/>
                        <span style="color:#555;font-size:12px;">短网址实例：http://dwz.cn/asLbQf</span>
                        <div class="tools-result"></div>
<!--                        <img class="tools-loading" src="/Public/images/loading.gif">-->


                    </div>

                    <!-- 广告 -->
                    <div class="tools-ad">

                    </div>
                </div>


            </div>
        </div>
        <br />
        <!-- END 主体内容 -->


        <?php  get_temp('footer.php') ?>

        <!-- Main Footer -->
        <!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
        <!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
        <!-- Or class "fixed" to  always fix the footer to the end of page -->

    </div>
</div>
<!-- 锚点平滑移动 -->
<?php  get_temp('footer_js.php') ?>

<script type="text/javascript" src="/static/js/layer/layer.js"></script>
<script type="text/javascript">
    var input_search = function(){
        var input_val = $("textarea[name='long_url']").val().trim();
        if(input_val == ''){
            layer.msg('请输入URL网址。', {icon: 5});
            return false;
        }
        //alert(encodeURIComponent(input_val));
        submit_url( input_val );

    }



    var submit_url = function (long_url ){

        var index = layer.load(0, {time: 10*1000});

        var ajax = new XMLHttpRequest();
        var token = 'd746848a4b0b5241da7528ee5723574c';
        var longUrl = long_url;

        ajax.open('post','https://dwz.cn/admin/v2/create', 'true');

        ajax.setRequestHeader("Content-Type", "application/json");
        ajax.setRequestHeader("Token", token);

        // 发送请求
        ajax.send(JSON.stringify({
            url: longUrl
        }));

        ajax.onreadystatechange = function () {
            if (ajax.readyState === 4 && ajax.status === 200) {
                // 获取缩短后的网址
                var data = JSON.parse(ajax.responseText);
                console.log(data)
                if(data.Code=="0"){
                    $(".tools-result").html(data.ShortUrl);
                    $(".tools-result").show();
                }else{
                    $(".tools-result").html(data.ErrMsg);
                    $(".tools-result").show();
                }
                layer.close(index);
            }else {
                layer.close(index);
                //$("#error_msg").html("请确认您的网址是否正确...");
            }
        }
    }

</script>

</body>

</html>

