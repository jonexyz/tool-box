<?php
/**
 * Created by PhpStorm.
 * User: jone
 * Date: 18-12-15
 * Time: 下午12:50
 */
?>

<!doctype html>
<html lang="en">

    <?php define('TITLE','首页'); get_temp('header.php') ?>

    <body class="page-body">
    <!-- skin-white -->
    <div class="page-container">

        <?php get_temp('nav.php') ?>

        <div class="main-content">
            <?php get_temp('nav_top.php') ?>

            <!-- 常用推荐 -->
            <h4 style="text-align: center">关于本站</h4>
            <div class="row" >
            <div class="col-md-12" style="background-color: #c73a3a;height: 350px;"></div>

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

