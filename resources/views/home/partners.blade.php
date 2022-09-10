@extends('home.layouts.main')

@section('content')
    <div class="container-fluid font">
        <section class="section section-default mt-none mb-none fonttst">
            <div class="container">
                <h2 class="mb-sm mt-5 text-center"><strong>شركائنا</strong></h2>
                <!--partners section-->
                <div class="row d-flex justify-content-center mt-5 text-center">
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

                <!--partners-->
            </div>
        </section>
        <!--endform section-->
    </div>
@endsection
