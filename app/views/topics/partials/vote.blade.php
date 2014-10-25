<div id="vote" data-method="post" data-user="{{ Auth::id() }}" data-topic="{{ $topic->id }}">
    <span class="glyphicon glyphicon-thumbs-up"> {{ $topic->vote_count }}</span>
</div>
