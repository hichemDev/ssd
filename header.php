
 <!DOCTYPE html>
<html lang="Fr">
<head>

	<meta charset="UTF-8">
	<title><?php  wp_title(); ?> </title>
	<?php wp_head(); ?>
	<!-- personnal links -->

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/myCss.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.min.css">
<!-- personnal links -->
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" >
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.css" >
<link rel="icon" href="<?php echo get_stylesheet_directory_uri();  ?>/logo/icon.png" />

<!-- Optional theme -->


<!-- Latest compiled and minified JavaScript -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.1.0.min.js" ></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js" ></script>



<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/wow.js" ></script>
 	<script>
    	new WOW().init();
	</script>

<!-- boostrap links -->

 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body >
	<header>
		<nav class="navbar navbar-default">
  			<div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
 -->
		      <a class="navbar-brand" href="<?php bloginfo("home"); ?>">
		        <img alt="Brand" class="img-responsive" src="">
		      </a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		   
		      
		      <ul class="right
		      ">
		       	<button type="button" class="btn btn-default navbar-btn"><a href="<?php echo wp_logout_url(); ?>"></a>Déconnexion</button>

		      </ul>
		    
		  </div><!-- /.container-fluid -->
	</nav>
			
	</header>