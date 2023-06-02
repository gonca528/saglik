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
                        <h2>SAĞLIKLI TARİFLER</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about">
        <div class="container">

            <div class="row">
                @foreach ($tarif as $tarifs)
                    <div class="col-xl-4 col-lg-4 col col-sm-12">

                        <div class="card" style="width: 18rem;">

                            <img src="/images/{{ $tarifs->thumbnail }}" class="card-img-top" alt="...">

                            <div class="card-body">
                                <h5 class="card-title"> <a href="/tarifler/{{ $tarifs->id }}"> {!! $tarifs->baslık !!} </a>
                                </h5>

                                <h3 class="card-title"><a href="#"> </a></h3>

                                <p style="color:black" class="card-text"> {!! $tarifs->body !!} <a href="/tarifler/{!! $tarifs->id !!}"
                                    style="color:green; font-size:20px;" href="#">[...] </a></p>
                            </div>
                        </div>


                    </div>
                @endforeach





            </div>

        </div>
    </div>




    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>

    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
