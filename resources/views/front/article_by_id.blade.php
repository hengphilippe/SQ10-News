@extends('front.template.main')
@section('content')

    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Articles</h2>
                </div>
            </div>

            @foreach ($articles as $article) 
             <x-article-list :article="$article"/>
            @endforeach

            {{-- <div class="col-md-12">
                <div class="section-row">
                    <button class="primary-button center-block">Load More</button>
                </div>
            </div> --}}
        </div>
    </div>

@endsection





