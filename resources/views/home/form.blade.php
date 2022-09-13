@extends('home.layouts.main')

@section('content')
    <div class="container-xxl bg-primary page-header">
        <div class="container text-center">
            <h1 class="text-white animated zoomIn mb-3"> احجز كارتك</h1>
        </div>
    </div>
    </div>
    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">احجز كارتك</div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">

                    <form action="{{ route('form.create') }}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <span class="input-group-addon">الاسم الاول</span>
                                    <input type="text" class="form-control" id="name" name="first_name"
                                        placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <span class="input-group-addon">الاسم الثاني</span>
                                    <input type="text" class="form-control" id="name" name="last_name"
                                        placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <span class="input-group-addon">رقم الهاتف</span>
                                    <input type="tel" name="mobile" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <span class="input-group-addon">العنوان</span>
                                    <input type="text" name="address" class="form-control" id="subject"
                                        placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">ارسال</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
