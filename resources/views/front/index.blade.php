@extends('front.template.main')
@section('content')


    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>Latest</h2>
                            </div>
                        </div>

                      @foreach ($posts as $post)
 
                        <div class="col-md-12">
                            <div class="post post-row">
                                <a class="post-img" href="/article/{{ $post->id }}"><img
                                        src="{{  $post ->image}}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        {{-- <a class="post-category cat-2" href="category.html">JavaScript</a> --}}
                                        <span class="post-date">{{  $post ->created_at}}</span>
                                    </div>
                                    <h3 class="post-title"><a href="/article/{{ $post->id }}">{{ $post ->title}}</a></h3>
                                    <p>{{ $post ->body}}</p>
                                </div>
                            </div>
                        </div>

                      @endforeach

                        {{-- <div class="col-md-12">
                            <div class="section-row">
                                <button class="primary-button center-block">Load More</button>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="aside-widget text-center">
                        <a href="#" style="display: inline-block;margin: auto;">
                            <img class="img-responsive" src="img/xad-1.jpg.pagespeed.ic.qQJhsdJdF0.webp" alt="">
                        </a>
                    </div>


                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>Catagories</h2>
                        </div>
                        <div class="category-widget">
                            <ul>
                                <li><a href="#" class="cat-1">Web Design<span>340</span></a></li>
                                <li><a href="#" class="cat-2">JavaScript<span>74</span></a></li>
                                <li><a href="#" class="cat-4">JQuery<span>41</span></a></li>
                                <li><a href="#" class="cat-3">CSS<span>35</span></a></li>
                            </ul>
                        </div>
                    </div>


                    {{-- <div class="aside-widget">
                        <div class="tags-widget">
                            <ul>
                                <li><a href="#">Chrome</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">Tutorial</a></li>
                                <li><a href="#">Backend</a></li>
                                <li><a href="#">JQuery</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">JavaScript</a></li>
                                <li><a href="#">Website</a></li>
                            </ul>
                        </div>
                    </div> --}}

                </div>
            </div>

        </div>

    </div>

@endsection

