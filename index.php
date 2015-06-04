<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile first, no zoom on moblie -->
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no">
    <title>Homepage - Home</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <div id="wrapper">
            
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="container">

                <div class="navbar-header">
                    <!-- button for menu when on mobile -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Titel -->
                    <a class="navbar-brand" href="index.php">Flatmanager</a>

                </div><!-- end navbar-header -->

                <!-- Collect the nav links and forms for toggling -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href=""><span class="glyphicon glyphicon-question-sign"></span> FAQ</a></li>
                        <li><a href=""><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
                        <li><a href=""><span class="glyphicon glyphicon-pencil"></span> Sign Up</a></li>
                    </ul><!-- end navbar-nav -->

                    <!-- login navbar -->
                    <form class="navbar-form navbar-right">
                        <div class="form-group ">
                            <input type="text" placeholder="Username" class="form-control" id="inputUsername">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" class="form-control" id="inputPassword">
                        </div>

                        <button type="submit" class="btn btn-success">Login</button>

                        <div class="checkbox">
                            <label class="text-muted"><input type="checkbox" id="rememberMe"> Remember me</label>
                        </div>
                        <!-- copyright, only on small devices, hidden in footer -->
                        <p class="visible-xs">&copy; 2015 Nico Florin All Rights Reserved</p>
                  </form><!-- end login -->

                </div><!-- end navbarCollapse -->
            </div> <!-- end container -->
        </nav><!-- end nav -->	


        <!-- main container -->
        <div class="container" id="mainContainer">

            <!-- Carousel for mainpage Infos -->
            <div class="carousel slide" id="mainCarousel" data-interval="5000" data-ride="carousel"> <!-- interval in ms, auto switch -->

                <!-- Indicators (dots for change slides) -->
                <ol class="carousel-indicators">
                    <li data-slide-to="0" data-target="#mainCarousel" class="active"></li>
                    <li data-slide-to="1" data-target="#mainCarousel"></li>
                    <li data-slide-to="2" data-target="#mainCarousel"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active" id="slide1">
                        <div class="carousel-caption">
                            <h4>Slide 1</h4>
                            <p>blabla blablab alblab lablablab albla blabl ablabalblablab lablabal</p>
                        </div>
                    </div><!-- end item -->
                    <div class="item" id="slide2">
                        <div class="carousel-caption">
                            <h4>Slide 2</h4>
                            <p>blabla blablab alblab lablablab albla blabl ablabalblablab lablabal</p>
                        </div>
                    </div><!-- end item -->
                    <div class="item" id="slide3">
                        <div class="carousel-caption">
                            <h4>Slide 3</h4>
                            <p>blabla blablab alblab lablablab albla blabl ablabalblablab lablabal</p>
                        </div>
                    </div><!-- end item -->
                </div><!-- end carousel-inner -->

                <!-- Controls for left and right icon-->
                <a class="left carousel-control" data-slide="prev" href="#mainCarousel"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" data-slide="next" href="#mainCarousel"><span class="glyphicon glyphicon-chevron-right"></span></a>

            </div><!-- end mainCarousel -->

            <!-- main Callout -->
            <div class="well" id="mainCallout">
                <div class="page-header">
                    <h1>A Fancy Header <small>A subheader for extras</small></h1>
                </div><!-- end page-header -->

                <p class="lead">Some solid leading copy text comes here</p>

                <a href="" class="btn btn-large btn-primary">Register now!</a>
            </div><!-- end mainCallout -->

        </div><!-- end main container -->
          
    </div> <!-- end wrapper -->
  
<?php include "footer.php" ?>