@extends('components.layout')

<body class="main-layout inner_page about_page">
    <div class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-5">
                    <div class="abouttitle">
                        <h2> Diyetisyenler</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($post as $item)
        <div class="about">

            <div class="container">

                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="aboutimg">
                            <strong style="font-size: 25px; color:black"> {{ $item->ad }} </strong>
                            <p> {!! $item->bilgi !!}
                            </p>

                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="aboutimg">
                            <figure><img style="width: 510;height:340;" src="/images/{{ $item->thumbnail }}" alt="img" /></figure>
                            <br>

                            <ul class="nav custom-tabs1 nav-fill" id="myTabContent654" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" href="/diyetisyen/{{ $item->id }}">Profili
                                        Görüntüle</a>

                                </li>
                                
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <br> <br>


        </div>
    @endforeach



    <!-- end about -->


    <!-- footer -->

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
