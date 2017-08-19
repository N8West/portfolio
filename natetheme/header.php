<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/custom.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_bloginfo( 'template_directory' );?>/blog.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head();?>
  </head>

  <body>

    <!-- NavBar -->
   
   <div class="container" id="nav">
    <nav class="navbar navbar-default navbar-fixed-bottom navbar-inverse">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="navbrand">
        <a class="navbar-brand" href="#">
        <img src="img/navbarbrand.png" class="brand" alt="Nate West Logo"><br>
      </a>
    </div> <!-- /.navbrand -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#intro">Hello! <span class="sr-only">(current)</span></a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#about">A Bit About Myself</a></li>
        <li><a href="#services">What I Do</a></li>
        <li><a href="#contact">Getting in Touch</a></li>
              </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>
</div> <!--/.container -->

    <div class="container">
        <div class="container jumbotron">
      <div class="blog-header">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
      </div>
      </div>