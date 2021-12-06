<div>
    <div class="col-md-12">
        <div class="post post-row">
            <a class="post-img" href="/article/{{ $article->id }}"><img
                    src="{{  $article ->image}}" alt=""></a>
            <div class="post-body">
                <div class="post-meta">
                    <a class="post-category cat-2" href="category.html">{{ $article->category->name }}</a>
                    <span class="post-date">{{  $article ->created_at}}</span>
                </div>
                <h3 class="post-title"><a href="/article/{{ $article->id }}">{{ $article ->title}}</a></h3>
                <p>{{ $article ->body}}</p>
            </div>
        </div>
    </div>
</div>