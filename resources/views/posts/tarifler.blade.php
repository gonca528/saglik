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
                <div class="col-lg-9">
                    <article class="single-blog-detials">
                        <img src="/images/{{ $blog->thumbnail }}" alt="">
                        <ul class="post-meta  d-flex justify-content-between">
                            <li><a href="#"><i class="icofont"></i> 2019-01-16</a></li>

                        </ul>
                        <h2>{!! $blog->baslık !!}</h2>
                        <p> {!! $blog->body !!}
                        </p>

                        <p> {!! $blog->excerpt !!}</p>
                        <div><b style="">
                                <font size="5">{!! $blog->alt_baslik !!}</font>
                            </b></div>
                        <p> {!! $blog->alt_konu !!}</p>
                        <div><br></div>
                        <hr>
                        <br><br>






                    </article>

                </div>

                <div class="col-lg-3">

                    <aside class="sidebar-wrapper">
                        <span>Son Yazılar</span>

                        @foreach ($others as $item)
                            <div class="single-sidebar">
                                <div class="sideabrHeader">
                                </div>
                                <div class="media mt-51">
                                    <div class="media-body align-self-center">
                                        <a href="diyetisyen-yazilari-detay?id=66&amp;did=384"><img
                                                src="/images/{{ $item->thumbnail }}" alt=""></a>
                                        <span><a href="#">{{ $item->created_at }}</a></span>
                                        <h5><a href="/blogs/{{ $item->id }}">{{ $item->baslık }}</a>
                                        </h5>


                                        <hr>
                                    </div>
                                </div>



                            </div><!-- end single sidebar -->




                    </aside>
                    @endforeach

                </div>

            </div>


            <h3> Yorum Yaz</h3>
            <div class="row">

                <div class="card bg-light mx-3" style="width: 850px;">

                    <div class="card-body py-1">

                        <form method="POST" action="/comment/new/{{ $blog->id }}" class="mt-10">
                            @csrf

                            <div class="col-md-12 ">
                                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="isim">
                                    İsim
                                </label>
                                <input style="height: 60px" class="form-control" type="text" name="isim"
                                    id="isim" required>
                                @error('isim')
                                    <p class="text-red-500 text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="col-md-12 ">
                                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="baslik">
                                    Yorum Yaz
                                </label>
                                <input class="form-control" style="height: 60px" type="text" name="baslik"
                                    id="baslik" required>
                                @error('baslik')
                                    <p class="text-red-500 text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-3  ">


                                    <button type="submit" style="background-color:green"
                                        class="bg-dark-500 text-black rounded py-2 px-4 hover:bg-green-500"> Gönder
                                    </button>
                                    @error('email')
                                        <p class="text-red-500 text-xs mt-1">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>

                        </form>

                    </div>

                </div>
                </form>
            </div> <br><br>


            @foreach ($comment as $comments)
                <article class="card bg-light" style="width: 850px;">


                    <header class="card-header border-0 bg-transparent d-flex align-items-center">

                        <div>

                            <img class="rounded-circle me-2" /><a
                                class="fw-semibold text-decoration-none">{{ $comments->isim }}
                            </a>
                            <span class="ms-3 small text-muted">{{ $comments->created_at }}</span>
                        </div>
                        <div class="dropdown ms-auto">
                            <button class="btn btn-link text-decoration-none" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Report</a></li>
                            </ul>
                        </div>
                    </header>
                    <div class="card-body py-2 px-3">
                        {{ $comments->baslik }}
                    </div>

                </article>
                <br>
            @endforeach

            <br> <br>


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
