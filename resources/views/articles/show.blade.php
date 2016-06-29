@extends('app')
@section('content')
    <article class="format-image group">
        <h2 class="post-title pad">
            <a href="/article/{{ $article->id }}" rel="bookmark"> {{ $article->title }}</a>
        </h2>
        <div class="post-inner">
	    <div class="post-content pad">
		<div class="entry custome" style="text-align:right;">
		    <span>发布时间：</span>{{ $article->published_at }}
		</div>
	    </div>
            <div class="post-content pad">
                <div class="entry custome">
                    {{ $article->content }}
                </div>
            </div>
        </div>
    </article>
@endsection
