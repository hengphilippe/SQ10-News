@extends('front.template.main')
@section('above_content')
<div class="section section-grey">

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>Featured Post</h2>
                </div>
            </div>


            @for ($i = 0; $i < 3; $i++)
                <div class="col-md-4">
                    <x-feature-post-item :article="$articles[$i]"/>
                </div>
            @endfor

        </div>

    </div>

</div>

@endsection

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

