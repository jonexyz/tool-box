<?php
/**
 * Created by PhpStorm.
 * User: jone
 * Date: 18-12-15
 * Time: 下午12:50
 */

if(!empty($_GET['domain'])){
    $domain = trim($_GET['domain']);
    $url = 'http://apidata.chinaz.com/CallAPI/Whois?key='.CIF['whois'].'&domainName='.$domain;

    $data = file_get_contents($url);
    $data = json_decode($data,true);
    //dd($data);
}else{
    $domain = NULL;
}

?>

<!doctype html>
<html lang="en">

    <?php define('TITLE','126工具箱'); get_temp('header.php') ?>

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
                    <h3>域名信息查询</h3>
                </div>

                <form>
                    <input name="domain" value="<?=$domain?>" >
                    <button type="submit">点击查询</button>
                </form>

                <?php if(!empty($data) && $data['StateCode']==1){ ?>
                <div>
                    <p>域名:<?=$data['Result']['Host'];?></p>
                    <p>联系人:<?=$data['Result']['ContactPerson'];?></p>
                    <p>注册时:<?=$data['Result']['Registrar'];?></p>
                    <p>联系邮箱:<?=$data['Result']['Email'];?></p>
                    <p>联系电话:<?=$data['Result']['Phone'];?></p>
                    <p>创建时间:<?=$data['Result']['CreationDate'];?></p>
                    <p>过期时间:<?=$data['Result']['ExpirationDate'];?></p>
                    <p>域名服务器:<?=$data['Result']['WhoisServer'];?></p>
                    <p>DNS:<?=$data['Result']['DnsServer'];?></p>
                    <p>状态:<?=$data['Result']['DomainStatus'];?></p>
                </div>
                <?php } ?>

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

