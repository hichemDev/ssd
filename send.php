
<?php


if (isset($_POST["nom"])) {
    # code...

		$produitNom=$_POST["nom"];
         $produitLargeur=$_POST["largeur"];
         $produitLongeur=$_POST["longeur"];

         $produitPrix=$_POST["prix"];
echo $produitNom."nom;".$produitLargeur."largeur"."longeur".$produitLongeur."prix".$produitPrix;
        global $wpdb;
//        $wpdb->show_errors();
    //global $your_db_name;
    $produitTab =  'produit_ssd';

    

  
$wpdb->insert( $produitTab, array(
        'id'=> 1 ,
        'p_nom' => $produitNom,
        'p_largeur' => $produitLargeur,
        'p_longeur'=>$produitLongeur,
        'prix' => $produitprix

    ) );

         
$wpbb->print_error();






}else{

    echo "walou";
}



 ?>