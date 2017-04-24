 <!DOCTYPE html>
<html lang="Fr">
<head>
	<meta charset="UTF-8">
	<title><?php  wp_title(); ?> </title>
	<!-- personnal links -->

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/myCss2.css">
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
<body <?php if (is_home()) {echo'class="body"';} else {echo'class="page-body"';} ?>>
	<div <?php if (is_home()) {echo'class="front"';} else {echo'class="front-page"';} ?>>
		<header <?php if (! is_home()) {echo'class="second';}  ?>>
			<div class="menu relative">
				<nav class="navbar navbar-default ">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="<?php bloginfo('home') ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/logo/logo.png" alt="logo CTS"></a>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="container " style="">
				    	 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li <?php  if (is_home( )) {echo 'class="active"';} ?> ><a href="<?php bloginfo('home') ?>">Acceuil <span class="sr-only">(current)</span></a></li>
				        <li <?php  if (is_page('cts' )) {echo 'class="active"';} ?>><a href="<?php bloginfo('home') ?>/cts">CTS</a></li>
				         <li class="<?php  if (is_page('geodesie' )) {echo 'active';} ?> dropdown">   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Geodesie <span class="caret"></span></a></li>
				        <li class="<?php  if (is_page('applications spatiales' )) {echo 'active';} ?> dropdown">  
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu" role="button" >Applications Spatiales <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
							  <li><a tabindex="-1" href="#">Action</a></li>
							  <li><a tabindex="-1" href="#">Another action</a></li>
							  <li><a tabindex="-1" href="#">Something else here</a></li>
							  <li class="divider"></li>
							  <li><a tabindex="-1" href="#">Separated link</a></li>
							</ul>


				         </li>
				         <li class="<?php  if (is_page('geomatique' )) {echo 'active';} ?> dropdown">   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Geomatique<span class="caret"></span></a></li>
				         <li class="<?php  if (is_page('Observation de la terre' )) {echo 'active';} ?> dropdown">   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Observation de la terre<span class="caret"></span></a></li>
				          <li <?php  if (is_page('contact' )) {echo 'class="active"';} ?>><a href="<?php bloginfo('home') ?>/contact">Contact</a></li>
				          <li>
				          <button  type="button" class="btn .btn-sm  btn-info inscription"><a href="<?php bloginfo('home') ?>/inscription">Inscription</a>
				          </button>
				          </li>
				      </ul>
				    
				      <?php  ?>

				      
				    </div><!-- /.navbar-collapse -->

				    </div>	
				<!--   <ul class="nav navbar-nav navbar-right">
				      <form class="navbar-form navbar-left" role="search">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="Mots clés....">
				        </div>
				        <button type="submit" class="btn  search">Recherche</button>
				      </form>
				    </ul>  -->
				  </div><!-- /.container-fluid -->
				</nav>
			</div>
		</header>