<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog de ejemplo en clase</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <div class="container">

      <div class="row marketing">
        <div class="col-lg-12">
          @yield('content')
        </div>
      </div>

      <div class="footer">
        <p>&copy; UTB Bla 2014</p>
      </div>

    </div> <!-- /container -->
  </body>
</html>
