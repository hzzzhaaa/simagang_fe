<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset("/img/logo.ico")}}">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Style -->
        <style>
            .garis{
                height: 5px;
                width: 350px;
                background-color: rgba(255, 255, 255, 2);
            }
            .arrow{
                width: 5px;
                height: 15px;
                border: 2px solid #32557f;
                border-left: 0;
                border-top: 0;
                transform: rotate(135deg);
            }
            #ataskiri{
                font-family: Poppins;
                font-size: 36px;
            }

        </style>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>


        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="sb-nav-fixed">
        <nav class=" navbar navbar-expand navbar-light">
            <div class="mx-auto order-0">
                <a class="navbar-brand mx-auto" href="#">Dashboard</a>
            </div>

                <!-- Navbar-->
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                            </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">Settings</a></li>
                            <li><a class="dropdown-item" href="#!">Activity Log</a></li>

                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>


        <div id="layoutSidenav" style="background: #E9E7E8;">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <a class="nav-link"  href="/home">
                        <img src="/img/logo.png" id="logo-unj" alt="Logo UNJ" style="width:64px;height:63px;">
                        <p id="ataskiri">SiMAGANG</p>
                        </a>
                            {{-- @if (session('role')==1) --}}
                            <div class="garis"></div>
                            <a class="nav-link  {{ request()->routeIs('home') ? 'active' : '' }}" href="/home">
                                <div class="sb-nav-link-icon"><img src="/img/user.png" alt="" style="font-size: 24px;"></div>
                                User Profile
                            </a>

                            <a class="nav-link  {{ request()->routeIs('pilihpaket') ? 'active' : '' }}" href="/pilihpaket">
                                <div class="sb-nav-link-icon"><img src="/img/package.png" alt="" style="font-size: 24px;"></div>
                                Pilih Paket
                            </a>
                            {{-- @else --}}
                            <div class="garis"></div>
                            <a class="nav-link  {{ request()->routeIs('home') ? 'active' : '' }}" href="/home">
                                <div class="sb-nav-link-icon"><img src="/img/user.png" alt="" style="font-size: 24px;"></div>
                                User
                            </a>

                            <a class="nav-link  {{ request()->routeIs('semester') ? 'active' : '' }}" href="/semester">
                                <div class="sb-nav-link-icon"><img src="/img/clock.png" alt="" style="font-size: 24px;"></div>
                                Semester
                            </a>
                            <a class="nav-link  {{ request()->routeIs('paket') ? 'active' : '' }}" href="/paket">
                                <div class="sb-nav-link-icon"><img src="/img/package.png" alt="" style="font-size: 24px;"></div>
                                Paket Program
                            </a>

                            <a class="nav-link  {{ request()->routeIs('pemetaan') ? 'active' : '' }}" href="/pemetaan">
                                <div class="sb-nav-link-icon"><img src="/img/mapping.png" alt="" style="font-size: 24px;"></div>
                                Pemetaan Semester
                            </a>
                            <a class="nav-link  {{ request()->routeIs('informasi') ? 'active' : '' }}" href="/informasi">
                                <div class="sb-nav-link-icon"><img src="/img/info.png" alt="" style="font-size: 24px;"></div>
                                Informasi
                            </a>
                            <a class="nav-link  {{ request()->routeIs('program') ? 'active' : '' }}" href="/program">
                                <div class="sb-nav-link-icon"><img src="/img/target.png" alt="" style="font-size: 24px;"></div>
                                Program
                            </a>
                            {{-- @endif --}}
                        </div>
                    </div>
                </nav>
            </div>


            <div id="layoutSidenav_content" style="background: #E9E7E8;">
                <main class="py-4">

                @yield('content')
                </main>
            </div>
        </div>
    </body>

    </html>
