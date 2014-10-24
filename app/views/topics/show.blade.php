@extends('layouts.default')

@section('title')
@parent
@stop

@section('styles')
@stop

@section('body')
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-info">
    <div class="panel-heading">{{ $topic->title }} 
        <span> Open by {{ $topic->user->name }}</span>
    </div>
  <div class="panel-body">
      {{ $topic->body }}
  </div>
  <div class="panel-footer">
      this is panel-footer
  </div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-8 col-md-offset-2">
@include('topics.partials.replylist')
@include('topics.partials.replyform')
</div>
</div>
@stop

@section('scripts')
@stop
