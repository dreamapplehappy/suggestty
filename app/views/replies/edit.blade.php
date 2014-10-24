@extends('layouts.default')

@section('title')
@parent
@stop

@section('styles')
@stop

@section('body')

{{ Form::open(array('route'=>['reply.update', $reply->id],'method' => 'patch', 'role' => 'form', 'class' => 'from')) }}

<div class="form-group" id="editor">
    <textarea v-model="input" name="body" class="form-control">{{ $reply->body }}</textarea>
    <div v-html="input | marked"></div>
</div>
<div class="form-group">
    {{ Form::submit('Post', array('class' => 'btn btn-primary post-btn', 'id' => 'article-create')) }}
</div>
{{ Form::close() }}

@stop

@section('scripts')
@stop
