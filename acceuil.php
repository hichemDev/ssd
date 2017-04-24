<?php 
/*
Template Name: Acceuil
*/ 
 ?>			

 <!DOCTYPE html>
 	<html>
 	<head>
 		<title>tabelaudebord admin</title>
 	</head>
 	<body>
 	<header>
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

      <a class="navbar-brand" href="<?php bloginfo("home"); ?>">
        <img alt="Brand" src="<?php  ?>">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
       	<button type="button" class="btn btn-default navbar-btn"><a href="<?php echo wp_logout_url(); ?>"></a>Déconnexion</button>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
 	</header>	
 	<h1>Salut SDD</h1>
 	<button  class="btn btn-lg"><a style="color:white" href="<?php echo wp_logout_url(); ?>">Déconnexion</a></button>
 	</body>
 	</html>	