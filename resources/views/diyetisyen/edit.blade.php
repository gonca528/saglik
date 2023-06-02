<!-- DİYETİSYEN GÜNCELLE   -->

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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="https://icons.veryicon.com/png/o/miscellaneous/yuanql/icon-admin.png" width="30" height="30"
            alt="">

    </a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a style="color:black"class="nav-link" href="/index">Slider Düzenle <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a style="color:black" class="nav-link" href="#">Doktor Düzenle</a>
            </li>
            <li class="nav-item">
                <a style="color:black" class="nav-link" href="#">Tarif Düzenle</a>
            </li>

        </ul>
    </div>
</nav>
<section class="px-6 py-8" style="background-color: #dddcdc;">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
        <h1 style="margin-top: 90px;" class="text-center font-bold text-xl">Diyetisyen Güncelle</h1>

        <div class="container">
            <form method="POST" action="/admin/update/diyetisyen/{{ $user->id }}" class="mt-10"
                enctype="multipart/form-data">
                <!-- "csrf" blade template kullanılarak oluşturulan formlarda kullanılır kulllanmazsak hata alıyoruz. -->
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 ">
                            <label for="ad">
                                Ad
                            </label>

                            <input class="form-control" type="text" name="ad" id="ad" :
                                value="{{ old('baslık', $user->ad) }}">
                            @error('ad')
                                <small class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="thumbnail">
                                Fotoğraf
                            </label>

                            <input class="form-control" type="file" name="thumbnail" id="thumbnail" :
                                value="{{ old('thumbnail', $user->thumbnail) }}" required>
                            @error('thumbnail')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>



                        <div class="col-md-12 mt-3">
                            <label for="ünvan">
                                Ünvan
                            </label>
                            <textarea rows="5" cols="20" type="text" name="ünvan" id="ünvan" required class="ckeditor"
                                name="ünvan" id="ünvan" required>   {{ old('ünvan', $user->ünvan) }}</textarea>

                            @error('ünvan')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for="üniversite">
                                Üniversite
                            </label>
                            <textarea rows="5" cols="20" type="text" name="üniversite" id="üniversite" required class="ckeditor"
                                name="üniversite" id="üniversite" required>  {{ old('üniversite', $user->üniversite) }}</textarea>

                            @error('üniversite')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for="body">
                                Şehir
                            </label>
                            <textarea rows="5" cols="20" type="text" name="şehir" id="şehir" required class="ckeditor">  {{ old('şehir', $user->şehir) }}</textarea>

                            @error('excerpt')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for="diller">
                                Diller
                            </label>
                            <textarea rows="5" cols="20" type="text" name="diller" id="diller" required class="ckeditor">  {{ old('diller', $user->diller) }}</textarea>

                            @error('diller')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="col-md-12 mt-3">

                            <label for="bilgi">
                                Bilgi
                            </label>
                            <textarea rows="5" cols="20" type="text" name="bilgi" id="bilgi" required class="ckeditor">  {{ old('bilgi', $user->bilgi) }}</textarea>

                            @error('bilgi')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                    </div>

                </div>


                <div class="col-md-12 mt-3">
                    <button type="submit" class="bg-dark-500 text-black rounded py-2 px-4 hover:bg-blue-500">
                        Güncelle
                    </button>
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

<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $('.ckeditor').ckeditor();

    })
</script>
