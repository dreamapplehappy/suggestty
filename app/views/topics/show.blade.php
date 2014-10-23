@extends('layouts.default')

@section('title')
@parent
@stop

@section('styles')
@stop

@section('body')
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
    <div class="panel-heading">{{ $topic->title }} 
        <span> Open by {{ $topic->user->name }}</span>
    </div>
  <div class="panel-body">
      {{ $topic->body }}
  </div>
</div>
</div>
</div>
@stop

@section('scripts')
@stop
