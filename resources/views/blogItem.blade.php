@extends('front')

@section('content')
    <h1 class="mt-5">{{ $blog->title }}</h1>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Nyitóoldal</a></li>
            <li class="breadcrumb-item active"
                aria-current="page">{{ $blog->title }}
            </li>
        </ol>
    </nav>

    <p class="lead">{{ $blog->lead }}</p>
    <div class="content">
        {!! $blog->content !!}
    </div>
@endsection
