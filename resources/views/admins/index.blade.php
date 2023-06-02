<!-- DİYETİSYEN LİSTE SAYFASI -->

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ample Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/sample') }}">

    <link rel="stylesheet" href="{{ asset('/datatables/datatables.min.css') }}">

</head>

<body>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">

                    <a class="navbar-brand" href="dashboard.html">
                        <b class="logo-icon">
                            <img src="plugins/images/logo-icon.png" alt="homepage" />
                        </b>

                        <span class="logo-text">
                            <img src="plugins/images/logo-text.png" alt="homepage" />
                        </span>
                    </a>

                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>

                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ms-auto d-flex align-items-center">


                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>

                        <li>
                            <a class="profile-pic" href="#"> {{ strtoupper(auth()->user()->name) }}
                                </span></a>
                        </li>
                        <form style="margin-left:10px;" method="POST" action="/logout">

                            @csrf

                            <button type="submit " class="btn btn-primary">Çıkış Yap</button>
                        </form>

                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Panel</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/slider"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Slider</span>
                            </a>
                        </li>



                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/post"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Blog</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/diyetisyens"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Diyetisyen</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/randevus"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Randevular</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/tarifs"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Tarifler</span>
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>
        </aside>


        <div class="page-wrapper">

            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Diyetisyen</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Dashboard</a></li>
                            </ol>
                            <a href="/new" target="_blank"
                                class="btn btn-primary  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Diyetisyen
                                Ekle
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid ">

                <table style="background-color:white;" id="myTable">
                    <thead>
                        <tr>
                            <th>Diyetisyen Adı</th>
                            <th>Diyetisyen Sil</th>
                            <th>Diyetisyen Güncelle</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($post as $sliders)
                            <tr>

                                <td>{{ $sliders->ad }}</td>
                                <td class="">
                                    <form method="POST" action="/admin/update/diyetisyen/{{ $sliders->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-dark"> Diyetisyen Sil</button>
                                    </form>
                                </td>
                                <td> <a class="btn btn-outline-dark"
                                        href="/admin/diyetisyen/{{ $sliders->id }}/edit"> Diyetisyen Güncelle


                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>


            <footer class="footer text-center"> 2023 © Ample Admin brought to you by <a
                    href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>

        </div>

    </div>

    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="{{ asset('/datatables/datatables.min.js') }}"></script>

    <script src="js/waves.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    <script src="js/sidebarmenu.js"></script>
    <script src="js/custom.js"></script>



</body>

</html>
