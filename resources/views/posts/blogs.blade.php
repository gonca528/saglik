@extends('components.layout')

<body class="main-layout inner_page about_page">

    <div class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-5">
                    <div class="abouttitle">
                        <h2>DİYETİSYEN YAZILAR</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about">
        <div class="container">

            <div class="row">
                @foreach ($blog as $blogs)
                    <div class="col-xl-4 col-lg-4 col col-sm-12">

                        <div class="card" style="width: 18rem;">

                            <img src="/images/{{ $blogs->thumbnail }}" class="card-img-top" alt="...">

                            <div class="card-body ">

                                <h5 class="card-title"> {{ $post[0]->ad }}
                                </h5>

                                <h3 class="card-title"><a href="/blogs/{{ $blogs->id }}">{!! $blogs->baslık !!} </a>
                                </h3>
                                <p class="card-text">{!! $blogs->body !!} <a href="/blogs/{!! $blogs->id !!}"
                                        style="color:green; font-size:20px;" href="#">[...] </a></p><br>
                                <p style="color:green; font-size:14px; font-weight:600;"> {!! $blogs->created_at !!}
                                <p>

                            </div>

                        </div>
                        <br><br><br>

                    </div>
                @endforeach




            </div>

        </div>

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
