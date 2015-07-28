<?php 
  require_once('../Load_assets.php');
  $load = new Load_assets;
  $load->base_pathCSS('./assets/css/');
  $load->base_pathJS('./assets/js/');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Load assets Class</title>

    <!-- Load CSS -->
    <?php 
      echo $load->CSSLinks(array('bootstrap.min', 'style')); 
    ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <?php 
      echo $load->JSLinks(array('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min', 'https://oss.maxcdn.com/respond/1.4.2/respond.min')); 
    ?>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Load_assets Class</a>
        </div>
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="col-md-12">
          <h1>Hello, world!</h1>
          <p class="text-center" >Código demonstrativo de funcionamento da classe <strong>Load_assets</strong>.</p>
        </div>
        <div class="col-md-12">
          <div class="sobre">
          <h4>Sobre</h4>
          <hr />
          <ul class="list-group list-unstyled">
            <li><strong>Load_assets Class</strong></li>
            <li>@author: Marcelo Garbin</li>
            <li>@version: 1.0</li>
            <li>@link:   <a href="https://bitbucket.org/marcelogarbin/load_assets" target="_blank">https://bitbucket.org/marcelogarbin/load_assets</a></li>
          </ul>
          </div>
        </div>
        <div class="col-md-12">
          <p class="text-center"><a class="btn btn-primary btn-lg" href="#" role="button" id="learn">Learn more &raquo;</a></p>
        </div>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default details" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default details" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default details" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Developed 2015</p>
      </footer>
    </div> <!-- /container -->


    <!-- Load JS and Load JS Codes -->
    <?php
      echo $load->JSLinks(array('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min', 'bootstrap.min'));
    ?>
    <?php
      echo $load->JSCodes(array(
        '$(document).ready(function(){
            $("#learn").click(function() {
              alert("Yeap! Load assets Class Work\'s.");
            });
          });'
        ,
        '$(document).ready(function(){
            $(".details").click(function() {
              alert("Yeap! JSCodes Work\'s.");
            });
          });'
      ));  
    ?>

  </body>
</html>