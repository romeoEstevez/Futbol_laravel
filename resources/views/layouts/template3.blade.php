<!DOCTYPE html>
<html>

<head>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">






  <title>Fútbol Fans</title>
  <link rel="SHORTCUT ICON" src=public_path() . '/photos/favicon.png' type="image/x-icon" />

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



  @yield('head')

</head>
<body>


  <div class="container">


    <div id="navbar">
      <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Fútbol Fans</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav">


            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fechas <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="fecha20.php">Fecha 20</a></li>
                <li><a href="fecha19.php">Fecha 19</a></li>
                <li><a href="fecha18.php">Fecha 18</a></li>
                <li><a href="fecha17.php">Fecha 17</a></li>
                <li><a href="fecha16.php">Fecha 16</a></li>

              </ul>

            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Equipos <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="RiverPlate.php">River Plate</a></li>
                <li><a href="Boca.php">Boca</a></li>
                <li><a href="Racing.php">Racing</a></li>
                <li><a href="Independiente.php">Independiente</a></li>
                <li><a href="San Lorenzo.php">San Lorenzo</a></li>

              </ul>
            </li>

            <form role="search" class="navbar-form navbar-left">
              <div class="form-group">
                <input type="text" placeholder="Buscar" class="form-control">
              </div>
            </form>

            <ul class="nav navbar-nav navbar-right">

              <li><a href="Proyecto_Int_FAQ.php">FAQ</a></li>
              <li><a href="registroPOO.php">Registro</a></li>
              <li><a href="loginPOO-2.php">Log in</a></li>
            </ul>

          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </nav>
    </div>

    @yield('principal')




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "http://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script>
    $(function(){
      $('#test').popover();​
    });
    </script>





    <script>
    $(document).ready(function() {
      console.log( "ready!" );
      $('.carousel').carousel();
    });
    </script>
    <script async src="http://platform.twitter.com/widgets.js" charset="utf-8">
    </script>


    <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
    <script>
    $(document).ready(function(){
      $('[data-toggle="popover"]').popover()
    });
    </script>

    @yield('footer')


  </body>

  </html>
