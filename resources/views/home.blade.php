@extends('front')

@section('content')
    <div class="jumbotron mt-5">
        <h1 class="display-4">WEB 2 Blog 2019</h1>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="{{route('blog.create') }}"
           role="button">Új blogbejegyzés felvitele</a>
    </div>

    <div class="row">
        @foreach($blogPosts as $blogPost)
            <div class="col-lg-4 col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blogPost->title }}</h5>
                        <p class="card-text">{{ $blogPost->lead }}</p>
                        <a href="/blog/{{ $blogPost->id }}" class="btn btn-primary">Részletek</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
