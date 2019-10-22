<li class="comment">
    <div class="comment-body">
        @if(!empty($comment->commentor) && !empty($comment->commentor->avatar_path))
            <div class="comment-author">
                <img alt="{{ $comment->commentor->name }}" src="{{ asset($comment->commentor->avatar_path) }}" width="50" height="50">
            </div>
        @endif
        <cite class="fn">{{ $comment->commentor->name }}</cite>
        <div class="comment-meta">
            <h6>{{ $comment->created_at->toDateString() }}</h6>
        </div>
        <p>{!! $comment->body !!}</p>
    </div>
</li>