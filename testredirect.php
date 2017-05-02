<?php 
/*
Template Name: redirection
*/
 ?>



<?php get_header(); ?>


	<?php 
// base de données
$nom=$_POST["nom"];
$prix=$_POST["nom"];
	
			// creation tableau
		date_default_timezone_set('Africa/Algiers');
	
		global $wpdb;
		//$wpdb->show_errors();
$wpdb->insert( "produit_ssd", array(
        'p_nom' => $nom,
        'prix' => $prix

    ) );


		 
	

	echo "normal ca passe";


?>


 

				

<?php get_footer(); ?>
