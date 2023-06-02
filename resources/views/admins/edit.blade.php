<!-- BLOG GÜNCELLEME SAYFASI            -->
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
        <h1 style="margin-top: 90px;" class="text-center font-bold text-xl">Blog Güncelle</h1>

        <div class="container">
            <form method="POST" action="/admin/update/post/{{ $user->id }}" class="mt-10"
                enctype="multipart/form-data">
                <!-- "csrf" blade template kullanılarak oluşturulan formlarda kullanılır kulllanmazsak hata alıyoruz. -->
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 ">
                            <label for="baslık">
                                Gönderi
                            </label>

                            <input class="form-control" type="text" name="baslık" id="baslık" :
                                value="{{ old('baslık', $user->baslık) }}">
                            @error('baslık')
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
                            <label for="body">
                                Body
                            </label>
                            <textarea rows="5" cols="20" type="text" name="body" id="body" required class="ckeditor"
                                name="body" id="body" required>   {{ old('body', $user->body) }}</textarea>

                            @error('body')
                                <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>



                        <div class="col-md-12 mt-3">
                            <label for="excerpt">
                                Excerpt
                            </label>
                            <textarea rows="5" cols="20" type="text" name="excerpt" id="excerpt" required class="ckeditor">  {{ old('excerpt', $user->excerpt) }}</textarea>

                            @error('excerpt')
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
