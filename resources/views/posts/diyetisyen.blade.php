@extends('components.layout')
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
<link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
<link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/meanmenu.css') }}" rel="stylesheet">
<link href="{{ asset('css/nice.select.css') }}" rel="stylesheet">
<link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/slick.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">


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

    <div class="about">

        <div class="container">

            <div class="row">
                @foreach ($diyetisyen as $diyetisyens)
                    <div class="col-lg-6">
                        <article class="single-blog-detials">
                            <img src="/images/{{ $diyetisyens->thumbnail }}" alt="">
                            <br><br>
                        </article>

                    </div>
                @endforeach
                @foreach ($diyetisyen as $diyetisyens)
                    <div class="col-lg-6">
                        <table class="table table-success table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center " scope="col">{!! $diyetisyens->ad !!}</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"> Ünvan</th>
                                    <td>{!! $diyetisyens->ünvan !!}</td>


                                </tr>
                                <tr>

                                    <th scope="row"> Mezuniyet</th>
                                    <td>{!! $diyetisyens->üniversite !!}</td>


                                </tr>
                                <tr>
                                    <th scope="row"> Şehir</th>
                                    <td>{!! $diyetisyens->şehir !!}</td>
                                </tr>
                                <th scope="row"> Diller</th>
                                <td>{!! $diyetisyens->diller !!}</td>
                                </tr>
                        </table>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <p style="color:black;font-size:18px;"> {!! $diyetisyens->bilgi !!}
                </p>

            </div> <br><br>

            <div class="row">

                <a href="/diyetisyen/randevu/{{ $diyetisyens->id }}/yeni" type="submit" style="background-color:green"
                    class="bg-dark-700 text-black rounded py-2 px-4 hover:bg-green-500"> RANDEVU AL </a>
            </div>
        </div>
        <br> <br>


    </div>




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
