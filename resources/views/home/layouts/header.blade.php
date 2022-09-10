<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sigma Doc</title>
    <link rel="stylesheet" href="{{ asset('home//css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="headerpart">
        <!--nav bar-->
        <div>
            <div class="container-fluid header">
                <div class="container header">
                    <nav class="navbar navbar-expand-lg navbar-light header font">
                        <div class="container-fluid header">
                            <router-link to="/" exac><a><img src="{{ asset('home/img/logo.png') }}"
                                        width="50px" height="50" alt="alt" /></a></router-link>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item grab">
                                        <router-link to="/" exac><a href="{{ route('home') }}" class="fw-bold">الرئيسة</a></router-link>
                                    </li>
                                    <li class="nav-item grab">
                                        <router-link to="/about"><a href="{{ route('about_us') }}" class="fw-bold">من نحن
                                            </a></router-link>
                                    </li>
                                    <li class="nav-item grab">
                                        <router-link to="/portfolio"><a href="{{ route('form') }}" class="fw-bold">احجز كارتك</a></router-link>
                                    </li>
                                    <li class="nav-item grab">
                                        <router-link to="/Partners"><a href="{{ route('prtners') }}" class="fw-bold">شركائنا</a></router-link>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!--nav bar-->
    </div>
