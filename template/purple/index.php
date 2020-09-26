<?php include('./conn.php'); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="Keywords" content="<?php echo $ad['keyword'] ?>" />
     <meta name="description" itemprop="description" content="<?php echo $ad['content'] ?>"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title><?php echo $ad['name'] ?></title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="./template/purple/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="./template/purple/assets/css/font-awesome.css">

    <link rel="stylesheet" href="./template/purple/assets/css/templatemo-softy-pinko.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <img src="./template/purple/assets/images/logo.png" alt="Softy Pinko"/>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="/" class="active">首页</a></li>
                            <li><a href="//">交流群</a></li>
                            <li><a href="http://yun.jiexigu.com/">解析谷</a></li>
                           
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h1>欢迎使用<?php echo $ad['name'] ?> </h1>
                        <p>支持多家平台vip视频解析,解析仅支持学习交流,勿用非法用途!</p>
                        <a href="./user" class="main-button-slider">登录</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Small Start ***** -->
    <section class="section home-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="./template/purple/assets/images/featured-item-01.png" alt=""></i>
                                </div>
                                <h5 class="features-title">在线充值</h5>
                                <p>后台多种套餐可供选择，并且支持解析记录查询，透明扣费</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="./template/purple/assets/images/featured-item-01.png" alt=""></i>
                                </div>
                                <h5 class="features-title">资源替换</h5>
                                <p>如果您发现有视频不能播放，我们拥有替换系统，您可以在后台申诉提交</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="./template/purple/assets/images/featured-item-01.png" alt=""></i>
                                </div>
                                <h5 class="features-title">解析信息</h5>
                                <p>您可以直接在后台控制您的信息版权，无需在客户端上进行操作</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="./template/purple/assets/images/left-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">快速，稳定</h2>
                    </div>
                    <div class="left-text">
                        <p>用户可以在后台控制版权，广告，右键信息，备用解析等等！</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Home Parallax End ***** -->

    <!-- ***** Testimonials Start ***** -->
    <!-- ***** Testimonials End ***** -->

    <!-- ***** Pricing Plans Start ***** -->
    <section class="section colored" id="pricing-plans">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">套餐价格</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Donec vulputate urna sed rutrum venenatis. Cras consequat magna quis arcu elementum, quis congue risus volutpat.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title">包月</h3>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency">$</span>
                                <span class="price">XX</span>
                                <span class="period">请自行修改</span>
                            </div>
                            <ul class="list">
                                <li class="active">请自行修改</li>
                                <li class="active">请自行修改</li>
                                <li class="active">请自行修改</li>
                                <li>请自行修改</li>
                                <li>请自行修改</li>
                                <li>请自行修改</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="./user" class="main-button">登录购买</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->

                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="pricing-item active">
                        <div class="pricing-header">
                            <h3 class="pricing-title">包季</h3>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency">$</span>
                                <span class="price">21.50</span>
                                <span class="period">monthly</span>
                            </div>
                            <ul class="list">
                                <li class="active">请自行修改</li>
                                <li class="active">请自行修改</li>
                                <li class="active">请自行修改</li>
                                <li>请自行修改</li>
                                <li>请自行修改</li>
                                <li>请自行修改</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="./user" class="main-button">登录购买</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->

                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title">包年</h3>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency">$</span>
                                <span class="price">42.00</span>
                                <span class="period">monthly</span>
                            </div>
                            <ul class="list">
                               <li class="active">请自行修改</li>
                                <li class="active">请自行修改</li>
                                <li class="active">请自行修改</li>
                                <li>请自行修改</li>
                                <li>请自行修改</li>
                                <li>请自行修改</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="./user" class="main-button">登录购买</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Pricing Plans End ***** -->

    <!-- ***** Counter Parallax Start ***** -->
    <?php  
    $sql="select uid from user";
    $r=mysqli_query($conn,$sql);
    $people=mysqli_num_rows($r);
    $sql="select daynum from user";
    $rss=mysqli_query($conn,$sql);
	$znum=0;
	while($rsss=mysqli_fetch_assoc($rss)){
		$znum = $rsss['daynum']+$znum;
	}
    ?>
    <section class="counter">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong><?php echo $people ?></strong>
                            <span>全站用户</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-top">
                            <strong><?php echo $znum ?></strong>
                            <span>今日调用</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong>10</strong>
                            <span>稳定运行</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                            <strong>999999</strong>
                            <span>全站调用</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Counter Parallax End ***** -->   

    <!-- ***** Blog Start ***** -->
    <!-- ***** Contact Us End ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright">Copyright &copy; 2020 <?php echo $ad['name'] ?></p>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- jQuery -->
    <script src="./template/purple/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="./template/purple/assets/js/popper.js"></script>
    <script src="./template/purple/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="./template/purple/assets/js/scrollreveal.min.js"></script>
    <script src="./template/purple/assets/js/waypoints.min.js"></script>
    <script src="./template/purple/assets/js/jquery.counterup.min.js"></script>
    <script src="./template/purple/assets/js/imgfix.min.js"></script> 
    
    <!-- Global Init -->
    <script src="./template/purple/assets/js/custom.js"></script>

  </body>
</html>