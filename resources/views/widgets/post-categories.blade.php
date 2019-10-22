<!-- widget-wrap -->
<div class="widget-wrap fl-wrap">
    <h4 class="widget-title"><span>04.</span> {{ $title }}</h4>
    <div class="widget-container fl-wrap">
        <ul class="cat-item">
            @foreach($categories as $category)
                <li><a href="{{ route('category', $category->slug) }}">{{ $category->name }}</a> <span>({{ $category->posts_count }})</span></li>
            @endforeach
        </ul>
    </div>
</div>
<!-- widget-wrap end  -->  