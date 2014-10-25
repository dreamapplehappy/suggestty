<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
      </button>
      <a class="navbar-brand" href="{{ route('home') }}">Suggestty</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('topic.create') }}">Submit</a></li>
        @if(!Auth::check())
        <li><a href="{{ route('login') }}">sign in</a></li>
        <li><a href="{{ route('signup') }}">registe</a></li>
        @else
        <li><a href="#">{{Auth::user()->name}}</a></li>
        <li><a href="{{ route('logout') }}">logout</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
