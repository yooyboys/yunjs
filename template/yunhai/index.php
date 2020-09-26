<!DOCTYPE HTML>
<html>
<?php include('./conn.php'); ?>
<head>
    <meta charset="utf-8" />
    <meta name="author" content="v_xlongwang" />
    <meta name="description" content="<?php echo $ad['content'] ?>">
    <meta name="keywords" content="<?php echo $ad['keyword'] ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="token" content="905244417" />
    <title><?php echo $ad['name'] ?></title>
    <link rel="stylesheet" href="./template/yunhai/css/common.css">
    <link rel="stylesheet" href="./template/yunhai/css/index02.css">
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://source1.qq.com/wsd/html5.js"></script>
    <![endif]-->
    <script src="./template/yunhai/js/jquery.js"></script>
    <script src="./template/yunhai/js/fingerprint2.min.js"></script>
    <script src="./template/yunhai/js/ptloginout.js"></script>
</head>

<body class="bg">
    <div class="main">
        <div class="header">
            <div class="top-logo"></div>
            <ul class="top-menu index-top-menu">
                <li>
                    <a href="#">首页</a>
                </li>
              
                <li>
                    <a href="http://wpa.qq.com/msgrd?v=3&uin=1178350505&site=qq&menu=yes">交流群</a>
                </li>
                <li class="login_btn">
                    <a href="http://jx.jiexigu.com/">接口测试</a>
                </li>
				<li class="login_btn">
                    <a href="./user/register.php">注册</a>
                </li>
                <li class="login_btn">
                    <a href="./user">登录</a>
                </li>
                
            </ul>
        </div>
         <div class="content">
            <div class="middle-center">
                <div class="wrap-info">
                    <h3 class="tip-title">解析谷云解析计费系统</h3>
                   <center> <p class="txt-info">			本解析系统仅用于学习交流参考，请勿非法商用！禁止使用本站做学习的解析用来做任何商业用途！！！！</p></center>
                    <a href="./user" class="btn btn-big btn-blue">立即登录</a>
                    <div class="mod-check  ">
                        <a href="javascript:void(0);" class="check-more">解析测试</a>
                        <div class="mod-tips">
                            <ul class="dome-list">
                                <li>
                                    <a href="#">
                                        <svg width="48" height="48" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                            <title>Icon_iOS</title>
                                            <path d="M31.96 5c.026.254.038.508.038.76 0 1.898-.694 3.67-2.076 5.31-1.67 1.95-3.69 3.078-5.88 2.9-.028-.227-.044-.467-.044-.72 0-1.82.794-3.772 2.204-5.366.704-.808 1.6-1.48 2.684-2.015 1.084-.528 2.11-.82 3.074-.87M40 32.82c-.212.614-.434 1.2-.67 1.76-.576 1.327-1.256 2.55-2.044 3.67-1.072 1.53-1.952 2.59-2.63 3.177-1.05.965-2.176 1.46-3.382 1.487-.866 0-1.908-.246-3.124-.744-1.218-.497-2.338-.743-3.362-.743-1.074 0-2.226.246-3.458.743-1.234.498-2.228.76-2.988.783-1.156.05-2.308-.457-3.458-1.526-.734-.64-1.652-1.737-2.752-3.29-1.18-1.658-2.15-3.582-2.91-5.777C8.408 29.993 8 27.698 8 25.48c0-2.545.55-4.74 1.652-6.578.866-1.477 2.018-2.642 3.46-3.497 1.442-.855 3-1.29 4.678-1.32.918 0 2.122.285 3.618.842 1.492.56 2.45.844 2.87.844.314 0 1.378-.33 3.182-.992 1.706-.614 3.146-.868 4.326-.768 3.196.258 5.596 1.517 7.194 3.785-2.858 1.73-4.272 4.155-4.244 7.264.026 2.42.904 4.437 2.632 6.038.784.74 1.66 1.315 2.632 1.722"
                                                fill="#91A3AD" fill-rule="evenodd" />
                                        </svg>
                                    </a>
                                    <p>iOS</p>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="48" height="48" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                            <title>Icon_Android</title>
                                            <path d="M40.998 19.42c0-1.338-1.117-2.423-2.495-2.423-1.377 0-2.494 1.086-2.493 2.424v10.15c0 1.34 1.117 2.422 2.496 2.422 1.377 0 2.493-1.083 2.494-2.424l-.002-10.148zM13 18v15c0 1.457 1.106 3.06 2.57 3.06h1.8l.002 5.47c0 1.362 1.112 2.47 2.477 2.47 1.37 0 2.48-1.11 2.48-2.47l-.002-5.47h3.347v5.47c0 1.36 1.113 2.47 2.48 2.467 1.37 0 2.48-1.107 2.48-2.47l-.002-5.47h1.807c1.46 0 2.56-1.6 2.56-3.057V18H13zm16.082-5.485c-.516 0-.936-.416-.936-.932.002-.51.42-.933.937-.934.513 0 .935.42.934.933 0 .515-.42.932-.935.932zm-10.168.002c-.514 0-.933-.418-.933-.932 0-.512.42-.933.935-.933.518 0 .937.42.937.933 0 .514-.42.932-.938.932zM29.47 7.655l1.73-3.147c.093-.165.033-.374-.135-.467-.17-.088-.377-.028-.466.138l-1.75 3.18c-1.47-.652-3.115-1.018-4.857-1.016-1.737 0-3.382.363-4.846 1.01l-1.75-3.17c-.09-.168-.3-.228-.465-.137-.17.09-.23.3-.137.464l1.73 3.143C15.126 9.4 13 13.18 13 17h22c0-3.82-2.133-7.594-5.53-9.345zM9.495 17C8.117 17 7 18.088 7 19.425l.002 10.148c0 1.34 1.117 2.424 2.495 2.424 1.378 0 2.495-1.083 2.494-2.424v-10.15c0-1.336-1.118-2.422-2.496-2.42z"
                                                fill="#91A3AD" fill-rule="evenodd" />
                                        </svg>
                                    </a>
                                    <p>Android</p>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="48" height="48" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                            <title>Icon_Unity</title>
                                            <path d="M37.732 4l-15.93 4.257-2.357 4.15-4.785-.035L3 24.002 14.66 35.63l4.783-.036 2.362 4.15L37.732 44 42 28.115 39.576 24 42 19.888 37.732 4zM19.83 13.074L32.013 9.95 25.02 22.035H11.025l8.804-8.962zM28.428 24l6.995-12.086L38.803 24l-3.38 12.085L28.428 24zM19.83 34.926l-8.804-8.96H25.02l6.995 12.084-12.185-3.125z"
                                                fill="#91A3AD" fill-rule="evenodd" />
                                        </svg>
                                    </a>
                                    <p>Unity3D</p>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="48" height="48" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                            <title>Icon_Coco2d</title>
                                            <path d="M28.808 32.76c-.613-.058-1.157.39-1.215 1-.06.61.39 1.15 1.004 1.207.613.058 1.158-.39 1.216-1 .058-.61-.392-1.15-1.005-1.207zm-8.977 0c-.612.058-1.062.598-1.003 1.208.058.61.602 1.057 1.215 1 .613-.06 1.063-.6 1.005-1.21-.058-.61-.603-1.056-1.216-.998zm13.685 1.02c-.6 2.5-2.82 4.12-4.96 3.612-2.14-.507-3.388-2.946-2.788-5.448.6-2.502 2.82-4.12 4.96-3.614 2.14.507 3.388 2.947 2.788 5.45zm-13.43 3.612c-2.14.507-4.36-1.11-4.96-3.613-.6-2.503.648-4.943 2.787-5.45 2.14-.506 4.36 1.112 4.96 3.614.6 2.502-.648 4.94-2.788 5.448zm17.41-6.168c.21-1.25.31-2.554.292-3.904-.038-3.038-.67-6.196-1.877-9.386L34.5 14.21l-.745 2.506c-1.922-3.12-4.235-5.6-6.023-7.27-2.508-2.343-4.522-3.622-4.606-3.675L20.32 4l.78 3.212.243.994-.78.64c-5.77 4.717-8.347 9.796-9.464 13.81L9.02 19.58 9 23.925c-.06 12.51 6.03 16.873 7.997 17.95 2.114 1.392 4.528 2.127 6.985 2.127.104 0 .207 0 .312-.003 1.29-.032 2.562-.264 3.782-.69 1.065-.32 2.716-1.02 4.583-2.525 2.264-1.826 4.25-4.356 5.905-7.52L40 30.516l-2.505.707z"
                                                fill="#91A3AD" fill-rule="evenodd" />
                                        </svg>
                                    </a>
                                    <p>Cocos2D</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="wrap-animate">
                    <div class="animate02">
                        <div class="tip-style an-tip01">
                            <p>
                                支持多家平台vip视频解析,解析仅支持学习交流,勿用非法用途!
                            </p>
                        </div>
                        <div id="svganimation2_hype_container" style="margin: auto; position: relative; width: 640px; height: 480px; overflow: hidden; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); transform-style: flat;"
                            aria-live="polite" hyp_dn="svg_animation_2" aria-hidden="false">
                            <script type="text/javascript" charset="utf-8" src="./template/yunhai/js/svganimation2_hype_generated_script.js"></script>
                            <div id="HYPE_persistent_symbols" aria-hidden="true" style="display: none;"></div>
                            <div class="HYPE_scene" id="hype-scene-V8ADL9DGIUAQD7FGHCPE" hype_scene_index="0" aria-hidden="false"
                                aria-flowto="hype-obj-JKV49KJKQK4NBMUR5E5L" style="background-color: rgba(255, 255, 255, 0); display: block; overflow: hidden; position: absolute; width: 640px; top: 0px; left: 0px; height: 480px; transform-origin: 50% 50% 0px; z-index: 1; opacity: 1;">
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 40;">
                                    <div class="HYPE_element" id="hype-obj-JKV49KJKQK4NBMUR5E5L" aria-flowto="hype-obj-86LNTTNDFXAJ3PXHR9YU"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/chair.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 40; opacity: 1; width: 81px; height: 140px; transform-origin: 50% 50% 0px; transform: translateX(237px) translateY(297px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 39;">
                                    <div class="HYPE_element" id="hype-obj-86LNTTNDFXAJ3PXHR9YU" aria-flowto="hype-obj-QXA2ONB2ARK4QN52SWTE"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/developer.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 39; opacity: 1; width: 178px; height: 285px; transform-origin: 50% 50% 0px; transform: translateX(264px) translateY(152px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 35;">
                                    <div class="HYPE_element" id="hype-obj-QXA2ONB2ARK4QN52SWTE" aria-flowto="hype-obj-BYO06Z7OBCCUO2GYBGR2"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/desk1.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 35; opacity: 1; width: 500px; height: 112px; transform-origin: 50% 50% 0px; transform: translateX(123px) translateY(325px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 26;">
                                    <div class="HYPE_element" id="hype-obj-BYO06Z7OBCCUO2GYBGR2" aria-flowto="hype-obj-5PPT756A4DBTZMQD2TM9"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/lamp.svg&quot;); overflow: visible; background-size: 100% 100%; background-repeat: no-repeat; z-index: 26; display: inline; opacity: 1; width: 88px; height: 107px; transform-origin: 50% 50% 0px; transform: translateX(512px) translateY(220px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 25;">
                                    <div class="HYPE_element" id="hype-obj-5PPT756A4DBTZMQD2TM9" aria-flowto="hype-obj-FTOD9CECCY9OCMIUQTII"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/hamberger.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 25; opacity: 1; width: 47px; height: 38px; transform-origin: 50% 50% 0px; transform: translateX(123px) translateY(289px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 24;">
                                    <div class="HYPE_element" id="hype-obj-FTOD9CECCY9OCMIUQTII" aria-flowto="hype-obj-90HY90BKS57CV6MMCBPS"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/chips.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 24; opacity: 1; width: 41px; height: 47px; transform-origin: 50% 50% 0px; transform: translateX(194px) translateY(280px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 23;">
                                    <div class="HYPE_element" id="hype-obj-90HY90BKS57CV6MMCBPS" aria-flowto="hype-obj-RY72E1DA39MT9JF0C4Z5"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/coffee.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 23; opacity: 1; width: 42px; height: 60px; transform-origin: 50% 50% 0px; transform: translateX(156px) translateY(267px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 22;">
                                    <div class="HYPE_element" id="hype-obj-RY72E1DA39MT9JF0C4Z5" aria-flowto="hype-obj-CT0TX570E43BGU5RH3M6"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/ironman.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 22; opacity: 1; width: 34px; height: 35px; transform-origin: 50% 50% 0px; transform: translateX(475px) translateY(170px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 21;">
                                    <div class="HYPE_element" id="hype-obj-CT0TX570E43BGU5RH3M6" aria-flowto="hype-obj-ILVNWLWVE7691NXYNA6Q"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/computer1.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 21; opacity: 1; width: 189px; height: 161px; transform-origin: 50% 50% 0px; transform: translateX(202px) translateY(172px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 20;">
                                    <div class="HYPE_element" id="hype-obj-ILVNWLWVE7691NXYNA6Q" aria-flowto="hype-obj-U7GA8VZIUO8Z3OE5VP74"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/monitor1.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 20; opacity: 1; width: 144px; height: 129px; transform-origin: 50% 50% 0px; transform: translateX(397px) translateY(198px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 19;">
                                    <div class="HYPE_element" id="hype-obj-U7GA8VZIUO8Z3OE5VP74" style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/mouse.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 19; opacity: 1; width: 39px; height: 12px; transform-origin: 50% 50% 0px; transform: translateX(387px) translateY(315px) rotateY(0deg);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="animate03">
                        <div class="tip-style an-tip02">
                            <p>
                                
快速，稳定
用户可以在后台控制版权，广告，右键信息，备用解析等等！
                            </p>
                        </div>
                        <div id="svganimation3_hype_container" style="margin: auto; position: relative; width: 420px; height: 480px; overflow: hidden; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); transform-style: flat;"
                            aria-live="polite" hyp_dn="svg_animation_3" aria-hidden="false">
                            <script type="text/javascript" charset="utf-8" src="./template/yunhai/js/svganimation3_hype_generated_script.js"></script>
                            <div id="HYPE_persistent_symbols" aria-hidden="true" style="display: none;"></div>
                            <div class="HYPE_scene" id="hype-scene-AAYQ4PQA1N6110893RPL" hype_scene_index="0" aria-hidden="false"
                                aria-flowto="hype-obj-M1USQGT72WH0B28VG6MT" style="background-color: rgba(255, 255, 255, 0); display: block; overflow: hidden; position: absolute; width: 420px; top: 0px; left: 0px; height: 480px; transform-origin: 50% 50% 0px; z-index: 1; opacity: 1;">
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 36;">
                                    <div class="HYPE_element" id="hype-obj-M1USQGT72WH0B28VG6MT" aria-flowto="hype-obj-4SHUVFYNFJQ42YAETPVY"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/desk2.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 36; opacity: 1; width: 380px; height: 112px; transform-origin: 50% 50% 0px; transform: translateX(19px) translateY(325px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 33;">
                                    <div class="HYPE_element" id="hype-obj-4SHUVFYNFJQ42YAETPVY" aria-flowto="hype-obj-OLEHVR3QAN3D56XCZIQ3"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/plant1.svg&quot;); background-repeat: no-repeat; overflow: visible; transform-origin: 50% 50% 0px; transform: translateX(287px) translateY(277.5px) rotateY(0deg); background-size: 100% 100%; z-index: 33; display: inline; opacity: 1; width: 38px; height: 49px;"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 32;">
                                    <div class="HYPE_element" id="hype-obj-OLEHVR3QAN3D56XCZIQ3" aria-flowto="hype-obj-0V7SIRYD9EIXWH8FYDT1"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/labtop.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 32; opacity: 1; width: 78px; height: 81px; transform-origin: 50% 50% 0px; transform: translateX(39px) translateY(254px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 31;">
                                    <div class="HYPE_element" id="hype-obj-0V7SIRYD9EIXWH8FYDT1" aria-flowto="hype-obj-YA96RLRF9N840G2NT42C"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/pdmhand.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 31; opacity: 1; width: 25px; height: 20px; transform-origin: 50% 50% 0px; transform: translateX(225px) translateY(196px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 30;">
                                    <div class="HYPE_element" id="hype-obj-YA96RLRF9N840G2NT42C" aria-flowto="hype-obj-H1OW6MO2Y9B9318YCZ9S"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/monitor2.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 30; opacity: 1; width: 171px; height: 124px; transform-origin: 50% 50% 0px; transform: translateX(121px) translateY(205px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 29;">
                                    <div class="HYPE_element" id="hype-obj-H1OW6MO2Y9B9318YCZ9S" aria-flowto="hype-obj-ITJGJHR5479AJD4IBP0T"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/pdm.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 29; opacity: 1; width: 135px; height: 339px; transform-origin: 50% 50% 0px; transform: translateX(244px) translateY(98px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 28;">
                                    <div class="HYPE_element" id="hype-obj-ITJGJHR5479AJD4IBP0T" aria-flowto="hype-obj-2QNMCLZ69BJPHKZ1K2L4"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/computer2.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 28; opacity: 1; width: 40px; height: 80px; transform-origin: 50% 50% 0px; transform: translateX(106px) translateY(357px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 27;">
                                    <div class="HYPE_element" id="hype-obj-2QNMCLZ69BJPHKZ1K2L4" style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/line.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 27; opacity: 1; width: 80px; height: 100px; transform-origin: 50% 50% 0px; transform: translateX(113px) translateY(297px) rotateY(0deg);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="animate04">
                        <div class="tip-style an-tip03">
                            <p>
                                后台付费灵活多变支持包点 包月 价格透明，解析记录时间，ip应有尽有
                            </p>
                        </div>
                        <div id="svganimation4_hype_container" style="margin: auto; position: relative; width: 540px; height: 480px; overflow: hidden; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); transform-style: flat;"
                            aria-live="polite" hyp_dn="svg_animation_4" aria-hidden="false">
                            <script type="text/javascript" charset="utf-8" src="./template/yunhai/js/svganimation4_hype_generated_script.js"></script>
                            <div id="HYPE_persistent_symbols" aria-hidden="true" style="display: none;"></div>
                            <div class="HYPE_scene" id="hype-scene-OPLB7U3SO5TW1BL47Y6W" hype_scene_index="0" aria-hidden="false"
                                aria-flowto="hype-obj-70X4TRM7V7TAQJVNRKRW" style="background-color: rgba(255, 255, 255, 0); display: block; overflow: hidden; position: absolute; width: 540px; top: 0px; left: 0px; height: 480px; transform-origin: 50% 50% 0px; z-index: 1; opacity: 1;">
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 38;">
                                    <div class="HYPE_element" id="hype-obj-70X4TRM7V7TAQJVNRKRW" aria-flowto="hype-obj-88IOVZ5T06FJKS1XEMIG"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/po.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 38; opacity: 1; width: 106px; height: 315px; transform-origin: 50% 50% 0px; transform: translateX(257px) translateY(122px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 37;">
                                    <div class="HYPE_element" id="hype-obj-88IOVZ5T06FJKS1XEMIG" aria-flowto="hype-obj-4WN57ZY88NZCI52RFKJO"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/desk3.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 37; opacity: 1; width: 400px; height: 112px; transform-origin: 50% 50% 0px; transform: translateX(12px) translateY(325px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 18;">
                                    <div class="HYPE_element" id="hype-obj-4WN57ZY88NZCI52RFKJO" aria-flowto="hype-obj-SEEF8YH8D2QFIO4ZJSJR"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/chart.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 18; opacity: 1; width: 51px; height: 91px; transform-origin: 50% 50% 0px; transform: translateX(92px) translateY(236px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 17;">
                                    <div class="HYPE_element" id="hype-obj-SEEF8YH8D2QFIO4ZJSJR" aria-flowto="hype-obj-UL2IOUNZU8YDP2TQD0A1"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/book1.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 17; opacity: 1; width: 40px; height: 66px; transform-origin: 50% 50% 0px; transform: translateX(49px) translateY(261px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 16;">
                                    <div class="HYPE_element" id="hype-obj-UL2IOUNZU8YDP2TQD0A1" aria-flowto="hype-obj-1F32LVZIKRSI8ADL8LVS"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/pen.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 16; opacity: 1; width: 27px; height: 55px; transform-origin: 50% 50% 0px; transform: translateX(17px) translateY(272px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 15;">
                                    <div class="HYPE_element" id="hype-obj-1F32LVZIKRSI8ADL8LVS" aria-flowto="hype-obj-7FO6XARFUDK5HDZ9TTGR"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/computer3.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 15; opacity: 1; width: 189px; height: 161px; transform-origin: 50% 50% 0px; transform: translateX(109px) translateY(172px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 14;">
                                    <div class="HYPE_element" id="hype-obj-7FO6XARFUDK5HDZ9TTGR" style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/cup.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 14; opacity: 1; width: 28px; height: 45px; transform-origin: 50% 50% 0px; transform: translateX(356px) translateY(282px) rotateY(0deg);"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="animate-bottom">
                        <div id="svganimation1_hype_container" style="margin: auto; position: relative; width: 1500px; height: 480px; overflow: hidden; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); transform-style: flat;"
                            aria-live="polite" hyp_dn="svg_animation_1" aria-hidden="false">
                            <script type="text/javascript" charset="utf-8" src="./template/yunhai/js/svganimation1_hype_generated_script.js"></script>
                            <div id="HYPE_persistent_symbols" aria-hidden="true" style="display: none;"></div>
                            <div class="HYPE_scene" id="hype-scene-01UTZ8ZR0SPHN6GCQZRO" hype_scene_index="0" aria-hidden="false"
                                aria-flowto="hype-obj-ZDG68YG0BW4GPYIL6COT" style="background-color: rgba(255, 255, 255, 0); display: block; overflow: hidden; position: absolute; width: 1500px; top: 0px; left: 0px; height: 480px; transform-origin: 50% 50% 0px; z-index: 1; opacity: 1;">
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 41;">
                                    <div class="HYPE_element" id="hype-obj-ZDG68YG0BW4GPYIL6COT" aria-flowto="hype-obj-XKRVSFOVZJ1ERDRJ8C96"
                                        style="pointer-events: auto; position: absolute; border-style: none; background-color: rgb(26, 36, 48); border-width: 0px; border-color: rgb(216, 221, 228); overflow: visible; z-index: 41; width: 1400px; height: 2px; transform-origin: 50% 50% 0px; transform: translateX(50px) translateY(435px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 13;">
                                    <div class="HYPE_element" id="hype-obj-XKRVSFOVZJ1ERDRJ8C96" aria-flowto="hype-obj-3ZRAIF8LLAUDNQNQ8RNV"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/clock.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 13; opacity: 1; width: 80px; height: 80px; transform-origin: 50% 50% 0px; transform: translateX(209px) translateY(27px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 12;">
                                    <div class="HYPE_element" id="hype-obj-3ZRAIF8LLAUDNQNQ8RNV" aria-flowto="hype-obj-A4CXOHF24HYDPS7TL9IC"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/book2.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 12; opacity: 1; width: 57px; height: 93px; transform-origin: 50% 50% 0px; transform: translateX(423px) translateY(344px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 11;">
                                    <div class="HYPE_element" id="hype-obj-A4CXOHF24HYDPS7TL9IC" aria-flowto="hype-obj-HPCGAU8FLC8658HY5NO3"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/box.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 11; opacity: 1; width: 81px; height: 38px; transform-origin: 50% 50% 0px; transform: translateX(1071px) translateY(399px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 10;">
                                    <div class="HYPE_element" id="hype-obj-HPCGAU8FLC8658HY5NO3" aria-flowto="hype-obj-R9QPHC4O4HI0NYGKYBRS"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/bugly.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 10; opacity: 1; width: 52px; height: 72px; transform-origin: 50% 50% 0px; transform: translateX(1043px) translateY(365px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 9;">
                                    <div class="HYPE_element" id="hype-obj-R9QPHC4O4HI0NYGKYBRS" aria-flowto="hype-obj-0LABLMUNEFODLM6WDTPC"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/dyson.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 9; opacity: 1; width: 40px; height: 140px; transform-origin: 50% 50% 0px; transform: translateX(1367px) translateY(297px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 8;">
                                    <div class="HYPE_element" id="hype-obj-0LABLMUNEFODLM6WDTPC" aria-flowto="hype-obj-5FX9LAP4YWF7GRHVKHLW"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/locker.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 8; opacity: 1; width: 66px; height: 96px; transform-origin: 50% 50% 0px; transform: translateX(947px) translateY(341px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 7;">
                                    <div class="HYPE_element" id="hype-obj-5FX9LAP4YWF7GRHVKHLW" aria-flowto="hype-obj-KNMKEH9GQD1BUE8S8ZOU"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/trash.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 7; opacity: 1; width: 40px; height: 47px; transform-origin: 50% 50% 0px; transform: translateX(756px) translateY(390px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 6;">
                                    <div class="HYPE_element" id="hype-obj-KNMKEH9GQD1BUE8S8ZOU" aria-flowto="hype-obj-CK8CLKW06FGS4EM1YLZJ"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/device.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 6; opacity: 1; width: 120px; height: 56px; transform-origin: 50% 50% 0px; transform: translateX(580px) translateY(181px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 5;">
                                    <div class="HYPE_element" id="hype-obj-CK8CLKW06FGS4EM1YLZJ" aria-flowto="hype-obj-3W4S7VJT79Y49YIGXVDT"
                                        style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/book3.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 5; opacity: 1; width: 124px; height: 56px; transform-origin: 50% 50% 0px; transform: translateX(520px) translateY(273px) rotateY(0deg);"></div>
                                </div>
                                <div class="HYPE_element_container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; pointer-events: none; z-index: 4;">
                                    <div class="HYPE_element" id="hype-obj-3W4S7VJT79Y49YIGXVDT" style="pointer-events: auto; position: absolute; background-image: url(&quot;./template/yunhai/img/plant2.svg&quot;); background-repeat: no-repeat; overflow: visible; background-size: 100% 100%; display: inline; z-index: 4; opacity: 1; width: 62px; height: 83px; transform-origin: 50% 50% 0px; transform: translateX(75px) translateY(354px) rotateY(0deg);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--footer-->
        <!--footer-->
        <div class="mod-footer">
            <ul class="footer">
                <li>
                    <p class="footer-title">解析系统</p>
                    <ul class="sub-list">
                        <li>
                            <a href="http://wpa.qq.com/msgrd?v=3&uin=66441563&site=qq&menu=yes">系统购买</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <p class="footer-title">视频播放测试</p>
                    <ul class="sub-list">
                        <li>
                            <a href="http://jx.jiexigu.com/?url=https://www.iqiyi.com/v_2ffkws0bgr0.html?vfrm=pcw_home&vfrmblk=O&vfrmrst=711219_home_dianshiju_float_video_area1" target="_blank">爱奇艺测试</a>
                        </li>
                        <li>
                            <a href="http://jx.jiexigu.com/?url=https://v.qq.com/x/cover/dxd1v76tmu0wjuj.html" target="_blank">腾讯测试</a>
                        </li>
                        <li>
                            <a href="http://jx.jiexigu.com/?url=https://www.mgtv.com/b/337284/8634094.html?fpa=1413&fpos=4&lastp=ch_home" target="_blank">芒果测试</a>
                        </li>
                        <li>
                            <a href="http://jx.jiexigu.com/?url=https://v.youku.com/v_show/id_XNDY3NzM0NDQ0NA==.html?spm=a2hcb.12701310.app.5~5!2~5!3~5~5~5!7~5~5~5~A" target="_blank">优酷测试</a>
                        </li>
                    </ul>
                </li>
                <!--<li>
                    <p class="footer-title">关于我们</p>
                    <ul class="sub-list">
                        <li>
                        	<a href="http://sq.ymcx.shop">授权查询</a>
                        </li>
                        <li>
                            <a href="http://www.ymcx.shop">云海科技</a>
                        </li>
                        <li>
                            <a href="http://jx.jiexigu.com">解析谷</a>
                        </li>
                    </ul>
                </li>-->
                <li>
                    <p class="footer-title">联系我们</p>
                    <ul class="sub-list sub-contact">
                        <li class="wx-bugly">
                            <span>交流群：***</span>
                        </li>
                        <li class="kf-bugly">
                            <span>联系客服QQ：***</span>
                        </li>
                    </ul>
                </li>
                <li>
                    <!--<img src="二维码图片地址">-->
                </li>
            </ul>
            <div class="copyRight_box">
                <p>Copyright © 2020. <?php echo $ad['name'].'-'.$ad['ym'] ?></p>
            </div>
        </div>
    </div>
    <script>
        //布局控制
        $(function () {
            var clientHeight = $(window).height(),
                contentHeight;
            if (clientHeight < 770 || clientHeight == 770) {
                $('body').addClass('screen720');
                contentHeight = 770;
            } else {
                if (clientHeight > 770 && clientHeight < 927) {
                    contentHeight = 857;
                    $('body').removeClass('screen720');
                } else {
                    contentHeight = clientHeight - 70;
                    $('body').removeClass('screen720');
                }
            }
            //    console.log(contentHeight);
            $('.content').css('height', contentHeight);

            var svgBox = $('.wrap-animate');
            function svgScale() {
                var clientWidth = $(window).width();
                //            console.log(clientWidth);
                if (clientWidth > 1402 || clientWidth == 1402) {
                    svgBox.attr('class', 'wrap-animate')
                }
                if (clientWidth < 1402 && clientWidth > 1302 || clientWidth == 1302) {
                    svgBox.attr('class', 'wrap-animate animate-scale95')
                }
                if (clientWidth < 1332 && clientWidth > 1202 || clientWidth == 1202) {
                    svgBox.attr('class', 'wrap-animate animate-scale9')
                }
                if (clientWidth < 1202 && clientWidth > 1102 || clientWidth == 1102) {
                    svgBox.attr('class', 'wrap-animate animate-scale8')
                }
                if (clientWidth < 1102 && clientWidth > 1000 || clientWidth == 1000) {
                    svgBox.attr('class', 'wrap-animate animate-scale7')
                }
                if (clientWidth < 1000 && clientWidth > 900 || clientWidth == 900) {
                    svgBox.attr('class', 'wrap-animate animate-scale65')
                }
                if (clientWidth < 900 && clientWidth > 800 || clientWidth == 800) {
                    svgBox.attr('class', 'wrap-animate animate-scale55')
                }
                if (clientWidth < 800) {
                    svgBox.attr('class', 'wrap-animate animate-scale5')
                }
            }
            svgScale();
            $(window).resize(function () {
                svgScale();
            })


            //延时出现
            setTimeout(function () {
                $('.wrap-info').addClass('show');
            }, 100);
            // 图标选状态
            $('.dome-list li').hover(function () {
                $('.dome-list li').find('svg path').css('fill', 'rgba(145,163,173,.5)');
                $('.dome-list li').find('p').css('color', 'rgba(145,163,173,0.5)');
                $(this).find('svg path').css('fill', '#627480');
                $(this).find('p').css('color', '#627480');

            });

            $('.mod-tips').mouseleave(function () {
                $('.dome-list li').find('svg path').css('fill', '#91A3AD');
            });
            $.ajaxSetup({
                headers: {
                    'X-token': $('meta[name="token"]').attr('content')
                }
            });
            //获取个人信息
            $.ajax({
                url: webSitePathName + "/users/null/info",
                type: "get",
                dataType: "json",
                success: function (json, textStatus, jqXHR) {
                    if (json && json.ret) {
                        var logoUrl = json.ret.logoUrl ? json.ret.logoUrl : '7f909f59-4262-428b-9896-2527d103ab47';
                        if (logoUrl && json.ret.newUserId != 'DEMO') {
                            $('.userName').show().attr('src', webSiteType == 'buglyoa' ? 'http://rdm.oa.com/userLogo?userId=' + json.ret.userId : webSitePathName + '/image?id=' + logoUrl);
                            $('.login_btn').hide();
                        }
                        if (json.ret.userId && json.ret.userId != "DEMO") {
                            $('.userInfo').attr('href', webSitePathName + '/account/profile/' + json.ret.userId);
                            $('.myAppList').attr('href', webSitePathName + '/workbench/apps/' + json.ret.userId);
                        }
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    $('.userName').hide();
                    $('.login_btn').show();
                }
            });

            new Fingerprint2().get(function (result, components) {
                $.ajax({
                    url: webSitePathName + "/trail/organize?page=default&fp=" + result,
                    type: "post",
                    dataType: "json",
                    timeout: 3000,
                    success: function (json, textStatus, jqXHR) {
                        if (json && json.status == 201) {
                            $.ajax({
                                url: webSitePathName + "/trail/trailer",
                                type: "post",
                                dataType: "json",
                                success: function (json, textStatus, jqXHR) {
                                },
                                error: function (jqXHR, textStatus, errorThrown) {
                                }
                            });
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                    }
                });
            });
        });
    </script>
</body>

</html>