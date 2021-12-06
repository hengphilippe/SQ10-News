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

            <div class="col-md-4">
                <div class="post">
                    <a class="post-img" href="blog-post.html"><img
                            src="https://preview.colorlib.com/theme/webmag/img/xpost-5.jpg.pagespeed.ic.jXTrIrIxiM.webp" alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-2" href="category.html">JavaScript</a>
                            <span class="post-date">March 27, 2018</span>
                        </div>
                        <h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against
                                JavaScript-Based CPU Side-Channel Attacks</a></h3>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="post">
                    <a class="post-img" href="blog-post.html"><img
                            src="https://preview.colorlib.com/theme/webmag/img/xpost-5.jpg.pagespeed.ic.jXTrIrIxiM.webp" alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-3" href="category.html">Jquery</a>
                            <span class="post-date">March 27, 2018</span>
                        </div>
                        <h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use
                                JQuery?</a></h3>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="post">
                    <a class="post-img" href="blog-post.html"><img
                            src="https://preview.colorlib.com/theme/webmag/img/xpost-5.jpg.pagespeed.ic.jXTrIrIxiM.webp" alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-1" href="category.html">Web Design</a>
                            <span class="post-date">March 27, 2018</span>
                        </div>
                        <h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website
                                Design Mockup Into Code Automatically</a></h3>
                    </div>
                </div>
            </div>

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

