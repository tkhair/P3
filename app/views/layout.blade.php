<html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.10.1.js"></script>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="ajaxscript.js"> </script> 
  </head>

  <body>
    <h1>Developer's Best Friend</h1><br/>
    @yield('content')


  </body>

  <div class="footer">
    <p>(c) Tatiana Khair 2014<br/>
    This page have been developed in-line with Assignment 3 requirements of CSCI E-15 class at Harvard Extension School</p>
</div>

</html>