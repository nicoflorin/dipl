<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile first, no zoom on moblie -->
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no">
    <title>Homepage</title>

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
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
                        
                        <!-- Titel -->
						<a class="navbar-brand" href="#">Flatmanager</a>
                        
					</div><!-- end navbar-header -->
                    
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="navbarCollapse">
						<ul class="nav navbar-nav">
                            <li class="active"><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
							<li><a href=""><span class="glyphicon glyphicon-question-sign"></span> FAQ</a></li>
							<li><a href=""><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
                            
						</ul><!-- end ul navbar-nav -->
                        
                        <!-- My Account dropdown -->
                        <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-user"></span> My Account <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><span class="glyphicon glyphicon-off"></span> Log Out</a></li>
                            </ul>
                        </li>
                        </ul><!-- end My Account dropdown -->
					</div><!-- end navbarCollapse -->
				</div> <!-- end container -->
			</nav><!-- end nav -->	

          <!-- main container -->
            <div class="container" id="mainContainer">
                
                <!-- Sidebar Toggle -->
                <a href="#menu-toggle" class="btn btn-default visible-xs" id="menu-toggle">Toggle Menu</a>
                
                <div class="row">
                    <div class="col-md-2 hidden-xs">
                        <!-- Sidebar -->
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="#"><span class="glyphicon glyphicon-bell"></span> Putzplan</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-usd"></span> Finanzen</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Einkauf</a></li>
                        </ul>
                    </div><!-- end col-md-2 -->
                    
                    <div class="col-md-10">
                        <!-- right Content -->
                        <div class="well">
                            <div class="page-header">
                              <h1>Putzplan</h1>
                            </div><!-- end page-header -->
                            <p>blabla blablab alblab lablablab albla blabl ablabalblablab lablabal</p>
                        </div>
                    </div><!-- end col-md-10 -->
                </div><!-- end row -->
       </div> 
                
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Bootstrap's JavaScript plugin -->
    <script src="js/bootstrap.min.js"></script>
          
    <!-- Sidebar Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
          
  </body>
</html>