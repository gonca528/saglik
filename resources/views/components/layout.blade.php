<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Sağlıklı Yaşam</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>


<body class="main-layout">

    <div class="container">

        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Anasayfa<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link " href="/blogs">Diyetisyen Yazıları</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link " href="/tarif">Sağlıklı Tarifler</a>
                    </li>


                    <li class="nav-item active">
                        <a class="nav-link " href="/diyetisyenler">Diyetisyenler</a>
                    </li>
                </ul>



            </div>
        </nav>

    </div>
    @yield('slider')
    @yield('about')
    @yield('service')
    @yield('coach')




    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="JJcoach">
                            <h3>Sağlık <strong class="coa"> </strong></h3>
                        </div>

                    </div>


                </div>
                <div class="row pdn-top-30">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                        <ul class="location_icon">
                            <li> <img src="/icon/location.png"> <span>Türkiye<br>İstanbul</span></li>


                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                        <ul class="location_icon">
                            <li> <img src="/icon/tellephone.png"><span>05345487878<br>05350550505</span></li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                        <ul class="location_icon">
                            <li> <img src="/icon/email.png"><span>Demo@gmail.com<br>Demo@gmail.com</span></li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                        <ul class="location_icon">
                            <li> <a href="#"><img src="/icon/facebook.png"></a></li>
                            <li> <a href="#"><img src="/icon/Twitter.png"></a></li>
                            <li> <a href="#"><img src="/icon/linkedin.png"></a></li>
                            <li> <a href="#"><img src="/icon/google.png"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>Copyright 2023 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>

    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
