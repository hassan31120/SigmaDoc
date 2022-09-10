@extends('home.layouts.main')

@section('content')
    <!--slider-->
    <div class="row d-flex justify-content-center m-2">
        <div id="carouselExampleControls" class="carousel slide sliderCss" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('home/img/img1.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('home/img/img2.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('home/img/img1.png') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!--end slider-->

    <!--Row of text and img-->
    <div class="container">
        <div class="row m-2 d-flex justify-content-center">
            <!--img div-->
            <div class="col-lg-5 col-md-6 col-sm-12 d-flex justify-content-center ">
                <img src="{{ asset('home/img/discount.png') }}" class="card-img-top img-fluid discount" alt="img" />
            </div>
            <!--end img div-->

            <!--text div-->
            <div class="col-lg-5 col-md-6 col-sm-12 d-flex justify-content-center font ">
                <div class="section-title font">
                    <div class="section_subtitle fw-bold">من نحن</div>
                    <h2 class="section_main_title">
                        <strong>سجما</strong>
                    </h2>
                    <div class="about-item">
                        <p class="fw-bold">
                            تقنية جديدة وخطة فريدة للتسويق وفكرة تُطبق
                            حصريًا في شركة سيجما ! سيجما دوك عبارة عن بطاقة
                            تقدر عن طريقها التسويق لعيادتك من خلال كارت يضم
                            مجموعة من أفضل العيادات ومختلف التخصصات ويحق
                            لحامل الكارت أن يتم توفير خصم مميز له على باكدج
                            معينة وعلى هذا فإن عيادتك جزء من هذا الخصم
                            والكارت.
                        </p>
                    </div>
                </div>
            </div>
            <!--end text div-->
        </div>
    </div>

    <!--Row of text and img-->

    <!--two image-->
    <div class="container">
        <div class="row m-2 d-flex justify-content-center ">
            <div class="col-lg-5 col-md-6 col-sm-12 d-flex justify-content-center">
                <img src="{{ asset('home/img/card1.jpg') }}" class="card-img-top img-fluid discount" alt="img" />
            </div>

            <div class="col-lg-5 col-md-6 col-sm-12 d-flex justify-content-center">
                <img src="{{ asset('home/img/card2.png') }}" class="card-img-top img-fluid discount" alt="img" />
            </div>
        </div>
    </div>
    <!--end two image-->

    <div class="container mt-5">
        <!--logo section-->
        <div class="container">
            <h2 class="mb-sm mt-5 text-center"><strong>شركائنا</strong></h2>
            <!--partners section-->
            <div class="row d-flex justify-content-center mt-5 text-center">
                <div class="col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center">
                    <div class="card mb-5" style="width: 18rem">
                        <img src="{{ asset('home/img/card1.jpg') }}" class="card-img-top" alt="..." />
                        <div class="card-body text-center">
                            <h5 class="card-title">company name</h5>
                            <button onclick="showDis()" class="btn btn-primary celector test"> show discount</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center">
                    <div class="card mb-5" style="width: 18rem">
                        <img src="{{ asset('home/img/card1.jpg') }}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">company name</h5>
                            <button onclick="showDis()" class="btn btn-primary celector test"> show discount</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center">
                    <div class="card mb-5" style="width: 18rem">
                        <img src="{{ asset('home/img/card1.jpg') }}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">company name</h5>
                            <button onclick="showDis()" class="btn btn-primary celector test"> show discount</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center mb-5">
                <div class="col-2 d-flex justify-content-center">
                    <a href="{{ route("prtners") }}" class="btn btn-primary fw-bolder"> المزيد </a>
                </div>
            </div>
            <!--partners-->
        </div>
        <!--end logo section-->
    </div>
@endsection
