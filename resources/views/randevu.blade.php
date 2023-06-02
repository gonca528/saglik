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
<section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
        <div class="about-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-5">
                        <div class="abouttitle">
                            <h2> RANDEVU OLUŞTUR</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <form method="POST" action="/diyetisyen/randevu/{{ $user->id }}/yeni/randevu/talep" class="mt-10">

                @csrf
                <!--blade template kullanılarak oluşturulan formlarda kullanılır kulllanmazsak hata alıyoruz. -->
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 ">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="ad">
                                Ad-Soyad
                            </label>
                            <input class="form-control" type="text" name="ad" id="ad" required>
                            @error('ad')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="col-md-6 ">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="telefon">
                                Telefon Numarası
                            </label>

                            <input class="form-control " type="text" name="telefon" id="telefon" required>
                            @error('telefon')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="tarih">
                            Randevu Tercihi
                        </label>

                        <input class="form-control " type="date" name="tarih" id="tarih" required>
                        @error('tarih')
                            <p class="text-red-500 text-xs mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="col-md-6 ">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="doktor">
                            Doktor
                        </label>
                        <input class="form-control" type="text" name="doktor" id="doktor" :
                            value="{{ old('title', $user->ad) }}" readonly>
                        @error('doktor')
                            <p class="text-red-500 text-xs mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="col-md-12 ">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="konu">
                            Konu
                        </label>
                        <input class="form-control " type="text" name="konu" id="konu" required>


                        @error('konu')
                            <p class="text-red-500 text-xs mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                <div class="row">


                </div>


        </div>


        <div class="row">
            <div class="col-md-12">


                <button style="margin-left:750px;" type="submit"
                    class="bg-dark-500 text-black rounded py-2 px-4 hover:bg-blue-500"> GÖNDER </button> <br><br>
                <br><br>

            </div>
        </div>

        <ul>

            @foreach ($errors->all() as $error)
                <li class="text-red-500 text-xs mt-1"> {{ $error }} </li>
            @endforeach
        </ul>
        </form>
        </div>
    </main>
</section>
