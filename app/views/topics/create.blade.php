@extends('layouts.default')

@section('title')
@parent
@stop

@section('styles')
@stop

@section('body')

@if(!isset($topic)){{ Form::open(array('route' =>'topic.store', 'role' => 'form', 'class' => 'form-horizontal')) }}
@else {{ Form::open(array('route'=>['topic.update', $topic->id],'method' => 'patch', 'role' => 'form', 'class' => 'from-horizontal')) }}
@endif

{{ Form::hidden('user_id',Auth::id()) }}
<div class="form-group">
    {{ Form::text('title', isset($topic)?$topic->title:null, array('class' => 'form-control', 'placeholder' => 'title')) }}
</div>
<div class="form-group" id="editor">
    <textarea v-model="input" name="body" class="form-control">{{{ isset($topic)?$topic->body:null }}}</textarea>
    <div v-html="input | marked"></div>
</div>
<div class="form-group">
    {{ Form::submit('Post', array('class' => 'btn btn-primary post-btn', 'id' => 'article-create')) }}
</div>
{{ Form::close() }}

@stop

@section('scripts')
@stop
