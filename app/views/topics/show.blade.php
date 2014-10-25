@extends('layouts.default')

@section('title')
@parent
@stop

@section('styles')
<link rel="stylesheet" href="{{ asset('css/topic.css') }}">
@stop

@section('body')
<section class="row topic">
<div class="col-md-1">
 @include('topics.partials.vote')
</div>
<div class="col-md-8 col-md-offset-1">
<div class="panel panel-info">
    <div class="panel-heading">
        {{ $topic->title }} 
    </div>
  <div class="panel-body">
      {{ $topic->body }}
  </div>
  <div class="panel-footer clearfix">
      @if(Auth::id() == $topic->user_id)
      <span>edit | delete</span>
      @endif
      <span class="right">Open By {{ $topic->user->name }}</span>
  </div>
</div>
</div>
</section>
<div class="row reply">
<div class="col-md-8 col-md-offset-2">
@include('topics.partials.replylist')
@include('topics.partials.replyform')
</div>
</div>
@stop

@section('scripts')
<script src="{{asset('js/vote.js')}}"></script>
@stop
