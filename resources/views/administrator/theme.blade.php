<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon/favicon.ico">

    <!-- Libs CSS -->

    <link href="./assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="./assets/libs/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="./assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="./assets/libs/prismjs/themes/prism-okaidia.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="./assets/css/theme.min.css">
    <title>SISLAB</title>
</head>

<body class="bg-light">

    {{-- @yield('content') --}}
    {{-- @include('componen/navbar')
    @include('componen/sidebar') --}}

    <div id="db-wrapper">
        <!-- navbar vertical -->
        <!-- Sidebar -->
        <nav class="navbar-vertical navbar">
            <div class="nav-scroller">
                <!-- Brand logo -->
                <a class="navbar-brand" href="" style="color: white">
                    {{-- <img src="./assets/images/brand/logo/logo.svg" alt="" /> --}}
                    <b>SISLAB POLINDRA {{ Auth::guard('admin')->user()->name }}</b>
                </a>
                <!-- Navbar nav -->
                <ul class="navbar-nav flex-column" id="sideNavbar">
                    <li class="nav-item">
                        <a class="nav-link has-arrow  active " href="{{ route('dash') }}">
                            <i data-feather="home" class="nav-icon icon-xs me-2"></i> Dashboard
                        </a>

                    </li>

                    {{-- @if (auth()->user()->level == 'super-admin') --}}
                    <!-- Nav item -->
                    <li class="nav-item">
                        <div class="navbar-heading">MASTER DATA</div>
                    </li>


                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages">
                            <i data-feather="layers" class="nav-icon icon-xs me-2">
                            </i> Penggguna
                        </a>

                        <div id="navPages" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link " href="./admin">
                                        Admin
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link has-arrow   " href="{{route('mahasiswa')}}">
                                        Mahasiswa
                                    </a>

                                </li>

                            </ul>
                        </div>

                    </li>

                    {{-- @endif --}}
                    <!-- Nav item -->
                    {{-- @if (auth()->user()->level == 'admin' || auth()->user()->level == 'super-admin') --}}

                    <li class="nav-item">
                        <a class="nav-link " href="./pages/layout.html">
                            <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                            </i>
                            Barang
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="./pages/layout.html">
                            <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                            </i>
                            Peminjaman
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="./pages/layout.html">
                            <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                            </i>
                            Pengembalian
                        </a>
                    </li>
                    {{-- @endif --}}

                </ul>

            </div>
        </nav>
        <!-- Page content -->
        <div id="page-content">
            <div class="header @@classList">
                <!-- navbar -->
                <nav class="navbar-classic navbar navbar-expand-lg">
                    <a id="nav-toggle" href="#"><i data-feather="menu" class="nav-icon me-2 icon-xs"></i></a>
                    <div class="ms-lg-3 d-none d-md-none d-lg-block">
                        <!-- Form -->
                        <form class="d-flex align-items-center">
                            <input type="search" class="form-control" placeholder="Search" />
                        </form>
                    </div>
                    <!--Navbar nav -->
                    <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
                        <li class="dropdown stopevent">
                            <a class="btn btn-light btn-icon rounded-circle indicator
          indicator-primary text-muted"
                                href="#" role="button" id="dropdownNotification" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="icon-xs" data-feather="bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"
                                aria-labelledby="dropdownNotification">
                                <div>
                                    <div
                                        class="border-bottom px-3 pt-2 pb-3 d-flex
              justify-content-between align-items-center">
                                        <p class="mb-0 text-dark fw-medium fs-4">Notifications</p>
                                        <a href="#" class="text-muted">
                                            <span>
                                                <i class="me-1 icon-xxs" data-feather="settings"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <!-- List group -->
                                    {{-- <ul class="list-group list-group-flush notification-list-scroll">
                                        <!-- List group item -->
                                        <li class="list-group-item bg-light">


                                            <a href="#" class="text-muted">
                                                <h5 class=" mb-1">Rishi Chopra</h5>
                                                <p class="mb-0">
                                                    Mauris blandit erat id nunc blandit, ac eleifend dolor pretium.
                                                </p>
                                            </a>



                                        </li>
                                        <!-- List group item -->
                                        <li class="list-group-item">


                                            <a href="#" class="text-muted">
                                                <h5 class=" mb-1">Neha Kannned</h5>
                                                <p class="mb-0">
                                                    Proin at elit vel est condimentum elementum id in ante. Maecenas et
                                                    sapien metus.
                                                </p>
                                            </a>



                                        </li>
                                        <!-- List group item -->
                                        <li class="list-group-item">


                                            <a href="#" class="text-muted">
                                                <h5 class=" mb-1">Nirmala Chauhan</h5>
                                                <p class="mb-0">
                                                    Morbi maximus urna lobortis elit sollicitudin sollicitudieget elit
                                                    vel pretium.
                                                </p>
                                            </a>



                                        </li>
                                        <!-- List group item -->
                                        <li class="list-group-item">


                                            <a href="#" class="text-muted">
                                                <h5 class=" mb-1">Sina Ray</h5>
                                                <p class="mb-0">
                                                    Sed aliquam augue sit amet mauris volutpat hendrerit sed nunc eu
                                                    diam.
                                                </p>
                                            </a>



                                        </li>
                                    </ul> --}}
                                    <div class="border-top px-3 py-2 text-center">
                                        <a href="#" class="text-inherit fw-semi-bold">
                                            View all Notifications
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- List -->
                        <li class="dropdown ms-2">
                            <a class="rounded-circle" href="#" role="button" id="dropdownUser"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar" src="./assets/images/avatar/avatar-7.jpg"
                                        class="rounded-circle" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                                <div class="px-4 pb-0 pt-2">


                                    <div class="lh-1 ">
                                        <h5 class="mb-1"> Admin</h5>
                                        <a href="#" class="text-inherit fs-6">View my profile</a>
                                    </div>
                                    <div class=" dropdown-divider mt-3 mb-2"></div>
                                </div>

                                <ul class="list-unstyled">


                                    <li>
                                        <a class="dropdown-item" href="{{ route('login') }}">
                                            <i class="me-2 icon-xxs dropdown-item-icon" data-feather="power"></i>Sign
                                            Out
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Container fluid -->
         
            {{-- <div class="bg-primary pt-10 pb-21"></div> --}}

            @yield('content')
            @yield('admin')
            @yield('mhs')
        </div>
      
    </div>

    <!-- Scripts -->
    <!-- Libs JS -->
    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="./assets/libs/feather-icons/dist/feather.min.js"></script>
    <script src="./assets/libs/prismjs/prism.js"></script>
    <script src="./assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="./assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="./assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
    <script src="./assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>

    <!-- Theme JS -->
    <script src="./assets/js/theme.min.js"></script>



</body>

</html>
