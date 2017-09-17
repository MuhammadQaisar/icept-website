<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> @yield('title') - ICEPT </title>
    <link rel="stylesheet" href="/css/app.css">

    <script type="text/javascript"
      src="/js/app.js">
    </script>
  </head>
  <body>
    <header>
      @include('inc.navbar')
    </header>

    <section class="container">
      @if(count($errors) > 0)
        @foreach($errors->all() as $error)
          <div class="alert alert-danger">
            {{$error}}
          </div>
        @endforeach
      @endif

      @if(session('success'))
        <div class="alert alert-success alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> {{session('success')}}
        </div>
      @endif

      @if(session('errors_msg'))
        <div class="alert alert-danger alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Error!</strong> {{session('errors_msg')}}
        </div>
      @endif


      @yield('content')
    </section>

    <footer id="footer" class="text-center">
      <p> Copyright &copy; ICEPT 2017 </p>
    </footer>
  </body>
</html>
