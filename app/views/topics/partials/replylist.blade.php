<br/>
Here is reply area. There {{ $topic->reply_count }} replies now.
<section class="reply-list">
    @foreach($replies as $reply)
    <div class="panel panel-success">
        <div class="panel-body">
        {{ $reply->body }}
        </div>
        <div class="panel-footer">
            Reply by {{ $reply->user->name }} | 
            <a href=" {{ route('reply.edit', $reply->id) }}">edit</a>
            | delete
        </div>
    </div>
    @endforeach
</section>
