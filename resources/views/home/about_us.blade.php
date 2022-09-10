@extends('home.layouts.main')

@section('content')
    <div class="section aboutUspart">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-6 d-flex justify-content-center">
                    <img src="{{ asset('home/img/black.png') }}" width="250" height="250" />
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 font">
                    <div class="title text-center">
                        <h1>سجما دوك</h1>
                    </div>
                    <div class="content text-center">
                        <h3>
                            تقنية جديدة وخطة فريدة للتسويق وفكرة تُطبق حصريًا في شركة سيجما
                            !
                        </h3>
                        <p>
                            سيجما دوك عبارة عن بطاقة تقدر عن طريقها التسويق لعيادتك من خلال
                            كارت يضم مجموعة من أفضل العيادات ومختلف التخصصات ويحق لحامل
                            الكارت أن يتم توفير خصم مميز له على باكدج معينة وعلى هذا فإن
                            عيادتك جزء من هذا الخصم والكارت.
                        </p>
                        <div class="button">
                            <input class="btn btn-primary" type="button" value="المزيد" />
                        </div>
                        <div class="row d-flex justify-content-center mt-3">
                            <ul class="social-icon">
                                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <hr />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
