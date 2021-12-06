<div>
    <div class="post">
        <a class="post-img" href="/article/{{ $article->id }}"><img
            src="{{  $article ->image}} alt=""></a>
        <div class="post-body">
            <div class="post-meta">
                <a class="post-category cat-2" href="category.html">{{ $article->category->name }}</a>
                <span class="post-date">{{  $article ->created_at }}</span>
            </div>
            <h3 class="post-title"><a href="/article/{{ $article->id }}">{{ $article ->title}}</a></h3>
        </div>
    </div>
</div>