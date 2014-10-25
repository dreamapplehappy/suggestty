@extends('layouts.default')

@section('title')
@parent
| home
@stop

@section('styles')
@stop

@section('body')
<div class="row">
<div class="col-md-8 col-md-offset-2">
    <div class="topics-list">
    @foreach($topics as $topic)
    <section class="list-group">
    <div href="#" class="list-group-item">
        <a href="{{ route('topic.show',$topic->id) }}" class="list-group-item-heading">{{ $topic->title }}</a><span class="badge">{{ $topic->vote_count }} votes</span>
        <div class="list-group-item-text">Open by {{ $topic->user->name }} on {{ date('Y m d', strtotime($topic->updated_at)) }}</div>
    </div>
    </section> 
    @endforeach
</div>
</div>
</div>
<div class="row">
<div class="col-md-7 col-md-offset-5">
    {{ $topics->links() }}
</div>
</div>
@stop

@section('scripts')
@stop
