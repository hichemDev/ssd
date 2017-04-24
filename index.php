<?php 

//page dacceuil avec login 




 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Acceuil SSD</title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/myCss.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.min.css">
<!-- personnal links -->
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" >
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.css" >
<link rel="icon" href="<?php echo get_stylesheet_directory_uri();  ?>/logo/icon.png" />

</head>
<body>

<section class="mainLog">
	
	<div class="outer">
		<section class="inscriptionFooter inner">
		<img style="padding-bottom: 10px;" src="<?php echo get_stylesheet_directory_uri(); ?>/images/ssdLogo.png" alt="">	
		<form action="<?php bloginfo('home') ; ?>/wp-login.php" method="post">
 		<input name="log" type="text" placeholder="utulisateur">
 		<input name="pwd" type="password" placeholder="password">
 		<button type="submit" class="btn btn-lg" > Se connecter</button>	

 </form>	
		</section>
			


		</div>
		
</section>
			
</body>
</html>
 