@extends('home.layouts.main')

@section('content')
    <div class="container-xxl bg-primary page-header">
        <div class="container text-center">
            <h1 class="text-white animated zoomIn mb-3"> المقالات</h1>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->
    <div class="container-xxl  p-0 font ">
        <!-- artivle section title -->
        <div class="container ">
            <div class="row d-flex justify-content-center article ">
                @foreach ($articles as $article)
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-4  d-flex justify-content-center" style="height: 450px">
                        <a href="{{ route('article', $article->id) }}" class="card-link">
                            <div class="card shadow text-center" style="width: 320px; overflow: hidden; position: relative;">
                                <img src="{{ asset($article->image) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $article->title }}</h5>
                                    <p class="card-text">{!! $article->description !!}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                <div class="text-center">{!! $articles->onEachSide(0.2)->links() !!}</div>
            </div>
        </div>
    </div>
@endsection
