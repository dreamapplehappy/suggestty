<br/>
Here is reply area. There {{ $topic->reply_count }} replies now.
<section class="reply-list">
    @foreach($replies as $reply)
    <div class="panel panel-success">
        <div class="panel-body">
        {{ $reply->body }}
        </div>
        <div class="panel-footer clearfix">
            <span class="right">Reply by {{ $reply->user->name }}</span> 
            @if(Auth::id() == $reply->user_id)
            <a href=" {{ route('reply.edit', $reply->id) }}">edit</a>
            | delete
            @endif
        </div>
    </div>
    @endforeach
</section>
