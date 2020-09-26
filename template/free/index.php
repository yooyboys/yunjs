<?php include('./conn.php'); ?>
<html lang="zh" class="js">

<head>
    <!-- DNS off -->
    <meta http-equiv="x-dns-prefetch-control" content="on" />
    <link rel="dns-prefetch" href="//yun.jiexigu.com" />
    <link rel="dns-prefetch" href="//jx.jiexigu.com" />
    <!-- DNS off -->
    <meta class="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $ad['name'] ?></title>
    <meta charset="utf-8">
    <meta name="Keywords" content="<?php echo $ad['keyword'] ?>" />
     <meta name="description" itemprop="description" content="<?php echo $ad['content'] ?>"/>
    <link rel="stylesheet" href="./template/free/css/style.min.css">
    <link rel="icon" href="https://cdn.jsdelivr.net/gh/yooyboys/yunjs@1.1/user/images/favicon.ico">
    <style type="text/css">
        .js .nav__mobile-0.opened {
            max-height: 241px !important
        }

        .js .nav__mobile-0.opened.dropdown-active {
            max-height: 9999px !important
        }
    </style>
</head>

<body>
    <div class="navbar navbar-extended  ">
        <nav class="nav__mobile nav__mobile-0 closed" aria-hidden="true"
            style="transition: max-height 284ms; position: absolute;">
            <ul>
                <li><a href="/">首页</a></li>
                                <li><a href="/user">登录</a></li>
                <li><a href="/user/register.php">注册</a></li>
                                <li><a href="https://qm.qq.com/cgi-bin/qm/qr?k=w9-CEjTIoR8m-sthnVa7AzxsUUnbK7g0&authKey=fsCHcpA7Pyn3jysM6oE9IA0ro9RbjPWZqEECRjObgI6lavf23q79grsaMaF9N7Ki&noverify=0">交流群</a></li>
            </ul>
        </nav>
        <div class="container">
            <div class="navbar__inner">
                <a href="/" class="navbar__logo"><?php echo $ad['name'] ?></a>
                <nav class="navbar__menu">
                    <ul>
                        <li><a href="/">首页</a></li>
                        <li><a href="http://jx.jiexigu.com/?url=https://v.qq.com/x/cover/dxd1v76tmu0wjuj.html">接口测试</a></li>
                                                <li><a href="https://qm.qq.com/cgi-bin/qm/qr?k=w9-CEjTIoR8m-sthnVa7AzxsUUnbK7g0&authKey=fsCHcpA7Pyn3jysM6oE9IA0ro9RbjPWZqEECRjObgI6lavf23q79grsaMaF9N7Ki&noverify=0">交流群</a></li>
                    </ul>
                </nav>
                <div class="navbar__menu-mob"><a href="" id="toggle" aria-hidden="false" class="">
                        <svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor"
                                d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"
                                class=""></path>
                        </svg>
                    </a></div>
            </div>
        </div>
    </div>
    <div class="hero">
        <div class="hero__overlay hero__overlay--gradient"></div>
        <div class="hero__mask"></div>
        <div class="hero__inner">
            <div class="container">
                <div class="hero__content">
                    <div class="hero__content__inner" id="navConverter">
                        <h1 class="hero__title">解析谷云解析系统</h1>
                        <p class="hero__text"></p>
                        <center>支持多家平台vip视频解析,解析仅支持学习交流,勿用非法用途! </center>
                        <p></p>

                                                <a href="./user" class="button button__accent">登录</a>
                        <a href="./user/register.php" class="button hero__button">注册</a>
                                            </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero__sub">
        <span id="scrollToNext" class="scroll  invisible">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="hero__sub__down"
                fill="currentColor" width="512px" height="512px" viewBox="0 0 512 512"
                style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <path
                    d="M256,298.3L256,298.3L256,298.3l174.2-167.2c4.3-4.2,11.4-4.1,15.8,0.2l30.6,29.9c4.4,4.3,4.5,11.3,0.2,15.5L264.1,380.9c-2.2,2.2-5.2,3.2-8.1,3c-3,0.1-5.9-0.9-8.1-3L35.2,176.7c-4.3-4.2-4.2-11.2,0.2-15.5L66,131.3c4.4-4.3,11.5-4.4,15.8-0.2L256,298.3z">
                </path>
            </svg>
        </span>
    </div>
    <div class="steps landing__section">
        <div class="container">
            <h2>为什么选择我们？</h2>
            <p>Why did you choose us?</p>
        </div>
        <div class="container">
            <div class="steps__inner">
                <div class="step">
                    <div class="step__media">
                        <img src="./template/free/img/undraw_designer.svg" class="step__image">
                    </div>
                    <h4>在线充值</h4>
                    <p class="step__text">平台集成对接码支付，可在线购买套餐等等</p>
                </div>
                <div class="step">
                    <div class="step__media">
                        <img src="./template/free/img/undraw_responsive.svg" class="step__image">
                    </div>
                    <h4>替换系统</h4>
                    <p class="step__text">可自主提交MP4,m3u8或官网直连等等！</p>
                </div>
                <div class="step">
                    <div class="step__media">
                        <img src="./template/free/img/undraw_creation.svg" class="step__image">
                    </div>
                    <h4>解析信息</h4>
                    <p class="step__text">无需在客户端文件修改信息！后台集成在线修改。</p>
                </div>
            </div>
        </div>
    </div>
    <div class="expanded landing__section">
        <div class="container">
            <div class="expanded__inner">
                <div class="expanded__media">
                    <img src="./template/free/img/undraw_browser.svg" class="expanded__image">
                </div>
                <div class="expanded__content">
                    <h2 class="expanded__title">稳定,便捷</h2>
                    <p class="expanded__text">用户可以在后台控制版权，广告，右键信息，备用解析等等！</p>
                </div>
            </div>
        </div>
    </div>
    <div class="expanded landing__section">
        <div class="container">
            <div class="expanded__inner">
                <div class="expanded__media">
                    <img src="./template/free/img/undraw_frameworks.svg" class="expanded__image">
                </div>
                <div class="expanded__content">
                    <h2 class="expanded__title">解析系统</h2>
                    <p class="expanded__text"><!--是一全网唯一一款可以现在充值点数，并且拥有客户端后台。可以对接一次解析和二次解析！-->后台支持对接多个接口，无缝切换！</p>
                </div>
            </div>
        </div>
    </div>

    <div class="cta cta--reverse">
        <div class="container">
            <div class="cta__inner">
                <h2 class="cta__title">友情连接</h2>
                <p class="cta__sub cta__sub--center">优先替换！自做资源，加载秒开</p>
                <a href="http://www.ymcx.shop/" class="button button__accent">云海网络 </a>
                <a href="http://xii999.com/" class="button button__accent">解析谷X4 </a>
                <a href="http://n-bb.com/" class="button button__accent">你哔哔TV </a>
                <a href="http://eo6.cc/" class="button button__accent">午夜爽片 </a>
            </div>
        </div>
    </div>
    <div class="footer footer--dark">
        <font class="container">
            <center>
                <small>
                    <font color="white">
                        <center>2020 <?php echo $ad['name'] ?> <?php echo $ad['beian'] ?></center><a rel="nofollow" href="/"
                            target="_blank">QQ：***</a>
                    </font><br>
                    重要声明:本站仅提供解析交流学习，并不参与资源上传下载解析等，请用户在法律允许的情况下学习使用。谢谢合作
                </small>
            </center>
        </font>
    </div>
    <script src="./template/free/js/app.min.js"></script>
</body>

</html>