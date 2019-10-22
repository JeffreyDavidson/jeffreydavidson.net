<!-- widget-wrap -->
<div class="widget-wrap fl-wrap">
    <h4 class="widget-title"><span>02.</span> {{ $title }}</h4>
    <div class="widget-container fl-wrap">
        <div class="widget-posts fl-wrap">
            <ul>
                @foreach($posts as $post)
                    <li class="clearfix">
                        <a href="{{ route('post', $post->slug) }}" class="widget-posts-img"><img src="{{ asset($post->thumbnail->path) }}" class="respimg" alt="{{ $post->title }}"></a>
                        <div class="widget-posts-descr">
                            <a href="{{ route('post', $post->slug) }}" title="">{{ $post->title }}</a>
                            <span class="widget-posts-date">{{ $post->published_at->toFormattedDateString() }}</span> 
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<!-- widget-wrap end  --> 