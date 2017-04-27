<?php 


		$produitNom=$POST["nom"];
         $produitLargeur=$POST["largeur"];
         $produitLongeur=$POST["longeur"];
         $produitPrix=$POST["prix"];
echo $produitNom."nom;".$produitLargeur."largeur";

			# code...
	global $wpdb;
    //global $your_db_name;
    $produitTab = $wpdb->prefix . 'produit_ssd';
    

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

        $sql = "CREATE TABLE IF NOT EXISTS   $produitTab   (
        p_id int(20) NOT NULL AUTO_INCREMENT,
        p_nom varchar(30) ,
        p_largeur int(20) ,
        u_longeur varchar(30) NOT NULL,
        u_prix varchar(50) NOT NULL,
         PRIMARY KEY (u_id)
         )";

         dbDelta($sql);

$wpdb->insert( $produitTab, array(
        'p_nom' => $produitNom,
        'p_largeur' => $produitLargeur,
        'p_longeur'=>$produitLongeur,
        'p_prix' => $produitprix

    ) );

         











 ?>