@extends('layouts.default')

@section('title')
@parent
@stop

@section('styles')
@stop

@section('body')
<section class="row topic">
<div class="col-md-1">
 @include('topics.partials.vote')
</div>
<div class="col-md-8 col-md-offset-1">
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
