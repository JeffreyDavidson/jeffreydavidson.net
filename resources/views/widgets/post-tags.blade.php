<!-- widget-wrap -->
<div class="widget-wrap fl-wrap">
    <h4 class="widget-title"><span>03.</span> {{ $title }}</h4>
    <div class="widget-container fl-wrap">
        <ul class="tagcloud">
            @foreach($tags as $tag)
                <li><a href="{{ route('tag', $tag->slug) }}" class="transition link">{{ $tag->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
<!-- widget-wrap end  -->      