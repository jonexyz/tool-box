<?php
/**
 * Created by PhpStorm.
 * User: Jone
 * Date: 2018-12-26
 * Time: 11:09
 */


//调用查看结果
if (empty($_GET['url'])) {
    $url = NULL;
} else {
    $url = trim($_GET['url']);
    $file = get_url() . '/qrcode.php?url=' . $url;
}


?>

<!doctype html>
<html lang="en">

<?php define('TITLE','126工具箱'); get_temp('header.php') ?>

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
        position: relative;
    }

    /** tools css*/
    .tools-div {
        margin: 0;
        width: 60%;
        background-color: #FFF;
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
        width: 90%;
        height: 60px;
        border: 1px solid #40add6;
        margin: 10px 0 30px 0;
        display: block;
        padding: 5px 2px;
    }

    .tools-result {
        width: 50%;
        margin: 20px 0;
        text-align: left;
        line-height: 30px;
        font-size: 20px;
        padding: 5px;
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
                    <h3>二维码在线生成</h3>
                </div>

                <div class="lin-block-content">
                    <div class="tools-div">
                        <h3 class="tools-h3">输入你要生成二维码的内容:</h3>

                        <form method="get" >
                            <textarea class="tools-textarea" name="url" ><?=$url?></textarea>

                            <input type="submit" class="form_btn blue"  value="生成二维码"/>
                        </form>


                        <div class="tools-result">
                            <?php if(! empty($file)){ ?>
                                <img src="<?=$file?>">
                            <?php } ?>
                        </div>

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

</body>

</html>

