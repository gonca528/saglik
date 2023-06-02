@extends('components.layout')

<body class="main-layout">
    @section('css')
    @endsection
    @section('slider')
        <section class="slider_section">
            <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner mt-4">
                    <div class="carousel-item active ">
                        <img style="width: 2500px;" class="first-slide" src="/images/{{ $sliders[0]->thumbnail }}"
                            alt="First slide">
                        <div class="container">
                            <div class="carousel-caption relative">
                                <h1>{!! $sliders[0]->title !!} <br><strong class="cur"></strong></h1>
                                <span style="text-size:5px;">{!! $sliders[0]->excerpt !!} </span>
                                <p>{!! $sliders[0]->body !!}</p>
                            </div>
                        </div>
                    </div>
                    @foreach ($sliders as $key => $slider)
                        @if ($key === 0)
                            @continue
                        @endif

                        <div class="carousel-item">

                            <img style="width: 2200px; height:1000px" class="second-slide"
                                src="/images/{!! $slider->thumbnail !!}" alt="Second slide">
                            <div class="container">
                                <div class="carousel-caption relative">
                                    <h1>{!! $slider->title !!} <br><strong class="cur"></strong></h1>
                                    <span>{!! $slider->excerpt !!}</span>
                                    <p>{!! $slider->body !!}
                                        <br>
                                    </p>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </section>
    @endsection
    <!-- about -->
    @section('about')
        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <div class="aboutheading">
                            <h2>Hakkımızda</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="aboutimg">
                            <figure><img src="images/about.jpg" alt="img" /></figure>
                            <p>Dünyanın Neresinde Olursanız Olun Diyetisyeniniz Hep Yanınızda!
                                Diyetisyeninizin size özel olarak hazırlayacağı diyet listeleriyle ideal kilonuza kavuşun.
                                Diyetisyeninizden sağlıklı ve dengeli beslenmeyi öğrenin.</p>
                            <a href="#">Daha Fazla</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <br><br><br>
    @endsection


    @section('coach')
        <div class="Coach">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>Neden <strong class="need">Sağlıklı Yaşama İhtiyacınız Var?</strong></h2>
                            <span>Diyetisyenlerimiz ile beraber sağlıklı yaşama adım atmış olacaksınız.</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="tow-box ">
                                    <i><img src="images/1.png" alt="img" /></i>
                                    <p>9200
                                        Kilo verdirdik.</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="tow-box mrgn-top">
                                    <i><img src="images/3.png" alt="img" /></i>
                                    <p>Daha sağlıklı yaşama adım atmak için</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-md-12 pnd-top">
                                <div class="tow-box ">
                                    <i><img src="images/2.png" alt="img" /></i>
                                    <p>9200
                                        Kilo verdirdik.</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="tow-box mrgn-top">
                                    <i><img src="images/4.png" alt="img" /></i>
                                    <p>9200 kilo verdirdik </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="read-more">
                            <a href="#">Daha Fazlası</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('service')
        <div class="get_infor green_bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="get ">
                            <h2>%100 <strong class="white">
                                    SONUÇLAR </strong> <br>ALIN
                            </h2>
                            <p>Hayatımız günden güne hızlanıyor. Yoğun iş hayatı, trafik ve modern hayatın getirdiği tüm
                                sorumluluklar bugün çok daha fazla vaktimizi alıyor. Modern yaşamın getirdiği koşuşturmaca
                                aynı zamanda kendine vakit ayırma, boş zamanları değerlendirme gibi konuları da gündeme
                                getirdi. Yani bugün eskiye göre çok daha yoğun bireyler olsak da, kendimize zaman ayırma,
                                sevdiklerimizle kaliteli zaman geçirme konusundaki farkındalığımız çok daha yüksek.

                                Kendine zaman ayırma isteği, yoğun iş temposu gibi konular online diyeti popüler hale
                                getirdi. Ayrıca yaşadığı yerde diyetisyen olmayan ya da yurt dışında yaşayıp Türk
                                diyetisyenlerle çalışmak isteyen kişiler için de online diyet bir çözüm sunmaktadır.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 pdn-right">
                        <div class="guaranteed">
                            <figure><img src="images/Request.jpg"></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    <!-- state abouts -->
    @section('js')
        <!-- Javascript files-->
        <script src="js/jquery.min.js"></script>

        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.0.0.min.js"></script>
        <script src="js/plugin.js"></script>
        <!-- sidebar -->
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/custom.js"></script>
    @endsection
</body>

</html>
