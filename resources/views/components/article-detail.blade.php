<div>
    @section('above_content')
    <div id="post-header" class="page-header">
        <div class="background-img" style="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F13%2F2015%2F04%2F05%2Ffeatured.jpg&q=85"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="post-meta">
                        <a class="post-category cat-2" href="category.html">{{ $article->category->name }}</a>
                        <span class="post-date">{{ $article->created_at }}</span>
                    </div>
                    <h1>{{ $article->title }}</h1>
                </div>
            </div>
        </div>
    </div>
    @endsection


    <div>
        <div class="section-row sticky-container">
            <div class="main-post" style="height: 350px">
                <p>{{ $article->body }}</p> 
            </div>
            <div class="post-shares sticky-shares">
                <a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
                <a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-envelope"></i></a>
            </div>
        </div>

        <div class="section-row text-center">
            <a href="#" style="display: inline-block;margin: auto;">
                <img class="img-responsive" src="img/xad-2.jpg.pagespeed.ic.RB_ZDhAXxh.webp" alt="">
            </a>
        </div>


        <div class="section-row">
            <div class="post-author">
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="https://preview.colorlib.com/theme/webmag/img/xauthor.png.pagespeed.ic.-dOTrKKeTJ.webp" alt="">
                    </div>
                    <div class="media-body">
                        <div class="media-heading">
                            <h3>John Doe</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                        <ul class="author-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        {{-- Comment Section --}}
        <div class="section-row">
            <div class="section-title">
                <h2>3 Comments</h2>
            </div>
            <div class="post-comments">

                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="img/xavatar.png.pagespeed.ic.yoqFUweBw4.webp" alt="">
                    </div>
                    <div class="media-body">
                        <div class="media-heading">
                            <h4>John Doe</h4>
                            <span class="time">March 27, 2018 at 8:00 am</span>
                            <a href="#" class="reply">Reply</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</p>

                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="img/xavatar.png.pagespeed.ic.yoqFUweBw4.webp"
                                    alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <h4>John Doe</h4>
                                    <span class="time">March 27, 2018 at 8:00 am</span>
                                    <a href="#" class="reply">Reply</a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat.</p>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="img/xavatar.png.pagespeed.ic.yoqFUweBw4.webp" alt="">
                    </div>
                    <div class="media-body">
                        <div class="media-heading">
                            <h4>John Doe</h4>
                            <span class="time">March 27, 2018 at 8:00 am</span>
                            <a href="#" class="reply">Reply</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                    </div>
                </div>

            </div>
        </div>

        {{-- Leave A Reply Section --}}

        <div class="section-row">
            <div class="section-title">
                <h2>Leave a reply</h2>
                <p>your email address will not be published. required fields are marked *</p>
            </div>
            <form class="post-reply">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <span>Name *</span>
                            <input class="input" type="text" name="name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <span>Email *</span>
                            <input class="input" type="email" name="email">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <span>Website</span>
                            <input class="input" type="text" name="website">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="input" name="message" placeholder="Message"></textarea>
                        </div>
                        <button class="primary-button">Submit</button>
                    </div>
                </div>
            </form>
        </div>

    </div>


</div>