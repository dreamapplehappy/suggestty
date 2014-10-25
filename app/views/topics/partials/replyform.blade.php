<section class="reply-form">
    <h2>Reply here</h2>
    {{ Form::open(['route'=>'reply.store','role' => 'form']) }}
    {{ Form::hidden('topic_id',$topic->id) }}
    {{ Form::hidden('user_id', Auth::check()?(Auth::id()):null) }}
    <div class="form-group">
        {{ Form::textarea('body',null,['class'=>'form-control']) }}
    </div>
    {{ Form::submit('submit', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
</section>
