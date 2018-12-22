<?php
/**
 * Created by PhpStorm.
 * User: jone
 * Date: 18-12-22
 * Time: 下午3:35
 */

?>

<!doctype html>
<html lang="en">

<?php define('TITLE','在线电视直播-126工具箱'); get_temp('header.php') ?>

<style>
    .banner h3{font-family:fantasy;text-decoration:none;color:dodgerblue;}

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
                    <h3>标题</h3>
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

