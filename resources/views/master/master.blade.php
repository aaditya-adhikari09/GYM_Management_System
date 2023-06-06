<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GYM</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <!-- Bootstrap icon link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    {{-- Aunthicated navbar Section section --}}
                    @auth
                        @if (Auth::user()->utype == 'ADM')
                            <li class="nav-item">
                                <a class=" nav-link active text-white fs-4" aria-current="page"
                                    href="{{ route('AdminDashboard') }}">AdminDashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link active text-white fs-4" aria-current="page"
                                    href="{{ route('UserIndex') }}">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active text-white fs-4" aria-current="page" href="">Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-white fs-4" aria-current="page"
                                    href="{{ route('shop') }}">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-white  fs-4" aria-current="page" href="">
                                    <i class="fa-solid fa-cart-shopping me-2"></i>Cart</a>
                            </li>
                        @endif
                    @endauth
                </ul>
                @if (Route::has('login'))
                    @auth

                        <div class="d-flex me-3">
                            <i class="bi bi-person-circle text-white  fs-2 me-2"></i>
                            {{-- <h6 class="text-white mt-2 fs-4">{{ Auth::user()->name }}</h6> --}}
                            <div class="nav-item dropdown text-white mt-2 fs-4">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">

                                    <span class="d-none d-lg-inline-flex">
                                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                    <a href="#" class="dropdown-item">
                                        <x-responsive-nav-link :href="route('profile.edit')">
                                            {{ __('Profile') }}
                                        </x-responsive-nav-link>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex me-3">
                            <i class="bi bi-box-arrow-left text-white fs-2 me-2"></i>
                            <h6 class="text-white mt-2 fs-4">

                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <a class="text-white mt-2" href="{{ route('logout') }}"
                                        onclick="event.preventDefault (); this.closest('form').submit();">logout</a>
                                </form>
                            </h6>
                        </div>

                        {{-- Above code is inserting from below --}}
                    @else
                        <div class="d-flex mt-3 me-3">
                            <i class="bi bi-box-arrow-in-right text-white fs-2 me-2"></i>
                            <h6 class="mt-2">
                                <a class="text-white fs-4" href="{{ route('login') }}">Log in</a>
                            </h6>
                        </div>

                        @if (Route::has('register'))
                            <div class="d-flex mt-3 me-3">
                                <i class="bi bi-r-square-fill text-white fs-2 me-2"></i>
                                <h6 class="mt-2"><a class="text-white fs-4" href="{{ route('register') }}">Register</a>
                                </h6>
                            </div>
                        @endif
                    @endauth
                @endif

            </div>
        </div>
    </nav>

    <!-- header section starts  -->

    @yield('middlesection')
    @yield('shop')
    @yield('userorders')
    @yield('shopsection')
    @yield('usercontact')
    @yield('cart')
    @yield('checkoutform')

    <script src='https://cdn.jsdelivr.net/gh/khushit-shah/WriteIt.js@version/writeit.min.js'></script>

</body>

</html>
