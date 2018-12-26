<?php  /** 公共菜单 */ ?>

<div class="sidebar-menu toggle-others fixed">
    <div class="sidebar-menu-inner">
        <header class="logo-env">
            <!-- logo -->
            <div class="logo">
                <a href="/index.html" class="logo-expanded">
                    <img src="/static/images/logo@2x.png" width="100%" alt="" />
                </a>
                <a href="index.html" class="logo-collapsed">
                    <img src="/static/images/logo-collapsed@2x.png" width="40" alt="" />
                </a>
            </div>
            <div class="mobile-menu-toggle visible-xs">
                <a href="#" data-toggle="user-info-menu">
                    <i class="linecons-cog"></i>
                </a>
                <a href="#" data-toggle="mobile-menu">
                    <i class="fa-bars"></i>
                </a>
            </div>
        </header>
        <ul id="main-menu" class="main-menu">

            <li class="active">
                <a href="<?= get_url() ?>/index.html" class="smooth">
                    <i class="linecons-user"></i>
                    <span class="title">关于本站</span>
                </a>
            </li>

            <li>
                <a href="javascript:void(0)">
                    <i class="linecons-lightbulb"></i>
                    <span class="title">影音娱乐</span>
                </a>
                <ul>
                    <li>
                        <a href="<?= get_url() ?>/yule/video.html?#top" class="smooth">
                            <span class="title">M3U8在线播放器</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= get_url() ?>/yule/vip.html?#top" class="smooth">
                            <span class="title">VIP视频解析</span>
                        </a>
                    </li>
                   <!-- <li>
                        <a href="<?/*= get_url() */?>/yule/zibo.html?#top" class="smooth">
                            <span class="title">电视直播</span>
                        </a>
                    </li>-->
                </ul>
            </li>

            <li>
                <a href="javascript:void(0)">
                    <i class="linecons-lightbulb"></i>
                    <span class="title">常用工具</span>
                </a>
                <ul>
                    <li>
                        <a href="<?= get_url() ?>/always/mima.html" class="smooth">
                            <span class="title">随机密码生成器</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= get_url() ?>/always/duanwangzhi.html" class="smooth">
                            <span class="title">百度短连接</span>
                        <!-- <span class="label label-pink pull-right hidden-collapsed">Hot</span>-->
                        </a>
                    </li>
                    <li>
                        <a href="<?/*= get_url() */?>/always/qrcode.html" class="smooth">
                            <span class="title">生成二维码</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0)">
                    <i class="linecons-lightbulb"></i>
                    <span class="title">站长工具</span>
                </a>
                <ul>
                    <li>
                        <a href="<?= get_url() ?>/zhanzhang/beian.html" class="smooth">
                            <span class="title">域名备案查询</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= get_url() ?>/zhanzhang/whois.html" class="smooth">
                            <span class="title">域名信息查询</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li>
                <a href="javascript:void(0)">
                    <i class="linecons-lightbulb"></i>
                    <span class="title">开发工具</span>
                </a>
                <ul>
                    <li>
                        <a href="javascript:void(0)" class="smooth">
                            <span class="title">在线正则表达式测试</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="smooth">
                            <span class="title">JSON</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0)">
                    <i class="linecons-lightbulb"></i>
                    <span class="title">编码/加密</span>
                </a>
                <ul>
                    <li>
                        <a href="javascript:void(0)" class="smooth">
                            <span class="title">Escape加密解密</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="smooth">
                            <span class="title">Base64加密解密</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="smooth">
                            <span class="title">URL编码解码</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="smooth">
                            <span class="title">RSA、RSA2加密解密</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
