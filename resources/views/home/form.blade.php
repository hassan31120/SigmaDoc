@extends('home.layouts.main')

@section('content')
    <div class="container-fluid font">
        <!--form section-->
        <section class="fonttst">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col col-xl-10">
                        <div class="card" style="border-radius: 0.5rem">
                            <div class="row g-0 d-flex justify-content-center align-items-center">
                                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                    <div class="card-body p-4 p-lg-5 text-black">
                                        <form>
                                            <!--logo-->
                                            <div class="d-flex align-items-center mb-3 pb-1">
                                                <span class="h1 fw-bold mb-0">
                                                    <img src="{{ asset('home/img/black.png') }}" width="50" height="50"
                                                        alt="" />
                                                </span>
                                            </div>

                                            <h5 class="fw-normal mb-3 pb-3 fw-bolder" style="letter-spacing: 1px">
                                                احجز كارتك
                                            </h5>
                                            <!--end logo-->
                                            <!--content-->
                                            <div class="col-lg-12 col-md-12 col-sm-12 p-4">
                                                <form class="row">
                                                    <div class="col-md-12">
                                                        <label class="form-label"></label>
                                                        <input type="text"
                                                            class="form-control border-top-0 border-start-0 border-end-0"
                                                            placeholder="الاسم الاول" />
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="form-label text-center"></label>
                                                        <input type="text"
                                                            class="form-control border-top-0 border-start-0 border-end-0"
                                                            placeholder="الاسم الاخير" />
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="form-label"></label>
                                                        <input type="text"
                                                            class="form-control border-top-0 border-start-0 border-end-0"
                                                            placeholder="العنوان" />
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="form-label">
                                                        </label>
                                                        <input type="text"
                                                            class="form-control border-top-0 border-start-0 border-end-0"
                                                            placeholder="رقم الهاتف" />
                                                    </div>
                                                    <div class="col-md-4">
                                                        <br />
                                                        <button class="btn btn-primary form-control fw-bold">
                                                            تسجيل
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!--end content-->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--endform section-->
    </div>
@endsection
