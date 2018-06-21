<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Latihan Laravel</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    
    <div class="container">
      <div class="row">
        <hr>
          <nav class="navbar">

            <ul class="nav navbar-nav">
              <li><a href="{{ Route('index') }}">Data Barang</a></li>
              <li><a href="#">Keterangan</a></li>
              
            </ul> 
          </nav>
        <hr>
      </div>
      <div class="row">
        @yield('content') 
      </div>

      <div class="row">
        <a href="#">Teknologi Informasi</a>
      </div>
    </div>

    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Data Barang</title>
  </head>
  <body>
    
    <a href="{{ Route('index') }}">Data Barang</a> |
    <a href="">Keterangan</a>
    
    <hr>
    @yield('content')
    <hr>

    <footer>FTI UNISKA 2018</footer>
    
  </body>
</html>
 --}}

