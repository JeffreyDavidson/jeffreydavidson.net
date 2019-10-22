<!-- filter  -->
<div class="blog-filters">
    <span>Filter by: </span>
    <!-- filter tag   -->
    <div class="tag-filter blog-btn-filter">
        <div class="blog-btn">Tags <i class="fa fa-tags" aria-hidden="true"></i></div>
        <ul>
            @foreach($tags as $tag)
                <li><a href="{{ route('tag', $tag) }}">{{ $tag->name }}</a></li>
            @endforeach
        </ul>
    </div>
    <!-- filter tag end  -->
    <!-- filter category    -->
    <div class="category-filter blog-btn-filter">
        <div class="blog-btn">Categories <i class="fa fa-list-ul" aria-hidden="true"></i></div>
        <ul>
            @foreach($categories as $category)
                <li><a href="{{ route('category', $category) }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </div>
    <!-- filter category end  -->
    <div class="blog-search">
        <form action="{{ route('blog') }}" class="searh-inner fl-wrap" method="get">
            <input name="searchQuery" id="se" type="text" class="search" placeholder="Search.." value="" />
            <button type="submit" class="search-submit color-bg" id="submit_btn"><i class="fa fa-search"></i> </button>
        </form>
    </div>
</div>
<!-- filter end    -->