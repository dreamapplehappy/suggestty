@extends('layouts.default')

@section('title')
@parent
|sign up
@stop

@section('styles')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@stop

@section('body')
<div class="row text-center pad-top ">
    <header class="col-md-12">
        <h2>Register</h2>
    </header>
</div>
<div class="row  pad-top">
<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
    <div class="">
    <strong>Create your account</strong>  
    </div>

    <!-- sign up foom start -->
    <section>
    {{ Form::open(array('class' => '', 'role' => 'form')) }}
    <br />
    <div class="form-group input-group {{ $errors->has('name') ? 'has-error' : '' }}">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        {{ Form::text('name','',array('class' => 'form-control', 'placeholder' => 'name')) }}
    </div>
    <div class="form-group input-group {{ $errors->has('email') ? 'has-error' : '' }}">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        {{ Form::email('email','',array('class' => 'form-control', 'placeholder' => 'email')) }}
    </div>
    <div class="form-group input-group {{ $errors->has('password') ? 'has-error' : '' }}">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        {{ Form::password('password',array('class' => 'form-control','placeholder' => 'password')) }}
    </div>
    <div class="form-group input-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'confirm password')) }}
    </div>
    <div class="form-group">
        <div id="messages">
            @if($errors->has())
            @foreach($errors->all() as $error)
                <small class="error">{{ $error }}</small>
            @endforeach
            @endif
        </div>
    </div>
    <div class="form-group">
        {{ Form::submit('Sign up', array('class' => 'btn btn-success')) }}
    </div>
    {{ Form::close()  }}
    <hr />
            Already Registered ?  <a href="{{ route('login') }}" >Login here</a>
    </section>
    <!-- form end -->

</div>
</div>
@stop

@section('scripts')
@stop
