<?php 


add_filter("login_redirect", "roles_login_redirect", 10, 3);

function roles_login_redirect($redirect_to, $request, $user)
{
if (is_array($user->roles))
if (in_array('administrator', $user->roles)) return admin_url(); // Page -> Tableau de bord
elseif (in_array('author', $user->roles)) return home_url('/accueil'); // Page -> Nouvel article
elseif(in_array('subscriber', $user->roles)) return home_url('/vendeur'); 

return home_url(); // Les abonnés sont redirigés en Page d'accueil
}

// Logout Redirect

function hich_logout_redirect()
{
wp_redirect(home_url());
exit;
}

add_action('wp_logout', 'hich_logout_redirect');
//produit
 add_action('wp_enqueue_scripts', 'add_js_scripts');


function add_js_scripts() {
	wp_enqueue_script( 'scriptProduit', get_stylesheet_directory_uri().'/js/scriptProduit.js', array('jquery'), '1.1', true );
	
    wp_enqueue_script( 'scriptClient', get_stylesheet_directory_uri().'/js/scriptClient.js', array('jquery'), '1.0', true );
	// pass Ajax Url to script.js
	wp_localize_script('scriptProduit', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
    wp_localize_script('scriptClient', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
}



function sendPhpProduit(){
if (isset($_POST["nom"])) {
    # code...
    $produitNom=$_POST["nom"];
         $produitLargeur=$_POST["largeur"];
         $produitLongeur=$_POST["longeur"];
         $produitPrix=$_POST["prix"];
        global $wpdb;
//        $wpdb->show_errors()
        $produitTab =  'wp_ssd_produit';
$wpdb->insert( $produitTab, array(
    
        'p_nom' => $produitNom,
        'p_largeur' => $produitLargeur,
        'p_longeur'=>$produitLongeur,
        'prix' => $produitPrix

    ) );

echo "Produit ".$produitNom." ajouté" ;        
//$wpbb->print_error();


}else{

    echo "walou";
}
    die();
}

function sendPhpClient(){
if (isset($_POST["nom"])) {
    # code...
    $clientNom=$_POST["nom"];
    $clientPrenom=$_POST["prenom"];
         $clientNumero="0".$_POST["numero"];
         
        global $wpdb;
//        $wpdb->show_errors()

        $clientTab =  'wp_ssd_client';
        $row = $wpdb->get_row("SELECT * FROM $clientTab WHERE nom = '$clientNom' ");

         if (is_null($row)) {

            $wpdb->insert( $clientTab, array(
    
                'nom' => $clientNom,
                'prenom' => $clientPrenom,

        'numero telephone' => $clientNumero
             ) );

            echo "Client ".$clientNom." ".$clientPrenom." ajouté" ;        
            //$wpbb->print_error();
          
          }else{
            echo "client existe deja";
          }      

}else{

    echo "walou";
}
    die();
}



add_action( 'wp_ajax_sendPhpProduit', 'sendPhpProduit' );
add_action( 'wp_ajax_nopriv_sendPhpProduit', 'sendPhpProduit' );

add_action( 'wp_ajax_sendPhpClient', 'sendPhpClient' );
add_action( 'wp_ajax_nopriv_sendPhpClient', 'sendPhpClient' );





 ?>