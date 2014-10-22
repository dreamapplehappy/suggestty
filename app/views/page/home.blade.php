@extends('layouts.default')

@section('title')
@parent
| home
@stop

@section('styles')
@stop

@section('body')
<div class="row">
<div class="col-md-6 col-md-offset-3">
    <ul class="list-group topics-list">
    @foreach($topics as $topic)
    <li class="list-group-item topic-item">
    <span class="badge">{{ $topic->vote_count }}</span>
    <a href="#">{{ $topic->title }}</a>
    <span class="topic-author">| Open by {{ $topic->user_id }} on {{ date('Y m d', strtotime($topic->updated_at)) }}</span>
    </li> 
    @endforeach
    </ul>
</div>
</div>
@stop

@section('scripts')
@stop
