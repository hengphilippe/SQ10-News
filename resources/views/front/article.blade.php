@extends('front.template.main')
@section('content')


 
    <div>
        <h1>{{ $article->title }}</h1>
        <p>{{ $article->created_at }}</p>


        <p>{{ $article->body }}</p>

    </div>


@endsection





