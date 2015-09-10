<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/ico" href="/img/favicon.ico" />
        <title>Laravel Mongo Crud system</title>

        <link href='/css/bootstrap.css' rel="stylesheet">
        <link href='/css/bootstrap-editable-1.5.1.css' rel="stylesheet">

        <script src="/js/jquery-2.1.4.js"></script>
        <script src="/js/bootstrap.js"></script>
        <script src="/js/bootstrap-editable.1.5.1.js"></script>
    </head>
    <body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      @if (Auth::guest())
        <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
         <li><a href="/auth/login">Log in</a></li>
          <li><a href="/auth/register">Registration</a></li>
      @endif        
      </ul>

       @if (!Auth::guest())
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      @endif

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact</a></li>
         @if (!Auth::guest())
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name}} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/auth/logout">Log Out</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Update Password</a></li>
          </ul>
        </li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



 @yield('content')
    </body>
</html>