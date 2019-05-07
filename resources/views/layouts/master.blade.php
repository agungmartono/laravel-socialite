<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
    <meta name="author" content="Creative Tim">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel Socialite</title>
    
    <link href="{{ asset('argon/img/brand/favicon.png') }}" rel="icon" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="{{ asset('argon/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('argon/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('argon/css/argon.css?v=1.0.1') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
</head>

<body>
    <header class="header-global">
        <nav id="navbar-main" class="navbar navbar-expand-lg navbar-dark bg-default">
            <div class="container">
                <a class="navbar-brand mr-lg-5" href="{{ route('home') }}">
                    <img src="{{ asset('argon/img/brand/white.png') }}">
                </a>
                <div class="navbar-collapse collapse" id="navbar_global">
                    <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                        @guest
                        <li class="nav-item d-none d-lg-block ml-lg-4">
                            <a href="{{ url('login') }}" class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon">
                                    <i class="fa fa-sign-in mr-2"></i>
                                </span>
                                <span class="nav-link-inner--text">Login</span>
                            </a>
                        </li>
                        <li class="nav-item d-none d-lg-block ml-lg-4">
                            <a href="https://github.com/agungmartonosyn/laravel-socialite" target="_blank"
                                class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon">
                                    <i class="fa fa-cloud-download mr-2"></i>
                                </span>
                                <span class="nav-link-inner--text">Download</span>
                            </a>
                        </li>
                        @else
                        <li class="nav-item d-none d-lg-block ml-lg-4">
                            <div class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon">
                                    <i class="fa fa-user mr-2"></i>
                                </span>
                                <span class="nav-link-inner--text">{{ Auth::user()->name }} -
                                    {{ Auth::user()->provider }}</span>
                            </div>
                        </li>
                        <li class="nav-item d-none d-lg-block ml-lg-4">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();"
                                class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon">
                                    <i class="fa fa-sign-in mr-2"></i>
                                </span>
                                <span class="nav-link-inner--text">Logout</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
    
    <footer class="footer">
        <div class="container">
            <hr>
            <div class="row align-items-center justify-content-md-between">
                <div class="col-md-6">
                    <div class="copyright">
                        &copy; <span id="year"></span> Develop By :
                        <a href="https://agungmartonosyn.github.io" target="_blank">Agung Martono</a> Template <a
                            href="https://www.creative-tim.com/product/argon-design-system" target="_blank">Argon</a>.
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav nav-footer justify-content-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About
                                Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md"
                                class="nav-link" target="_blank">MIT License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Core -->
    <script src="{{ asset('argon/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('argon/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('argon/vendor/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('argon/vendor/headroom/headroom.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <script src="{{ asset('argon/js/argon.js?v=1.0.1') }}"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
        // Table
        $(document).ready(function () {
            $('#githubs').DataTable();
            $('#gitlabs').DataTable();
            $('#googles').DataTable();
            $('#facebooks').DataTable();
            $('#instagrams').DataTable();
        });

        // Year
        document.getElementById("year").innerHTML = new Date().getFullYear();

        // Notification Login
        @if($message = Session::get('success'))
        Swal.fire({
            type: 'success',
            title: 'Login in successfully!',
            text: '{{ Auth::user()->name }} login using {{ Auth::user()->provider }}',
            html: '<strong>{{ Auth::user()->name }}</strong> login using <strong>{{ Auth::user()->provider }}</strong><br/><br/>',
        })
        @endif

    </script>
</body>

</html>
