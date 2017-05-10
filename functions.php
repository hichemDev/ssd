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
  
	wp_enqueue_script( 'scriptProduit', get_stylesheet_directory_uri().'/js/scriptProduit.js', array('jquery',), '1.1', true );
	
    wp_enqueue_script( 'scriptClient', get_stylesheet_directory_uri().'/js/scriptClient.js', array('jquery'), '1.0', true );
     wp_enqueue_script( 'showHint', get_stylesheet_directory_uri().'/js/showhint.js', array('jquery'), '1.0', true );
	// pass Ajax Url to script.js
	wp_localize_script('scriptProduit', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
    wp_localize_script('scriptClient', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
    wp_localize_script('showHint', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
}



function sendPhpProduit(){
if (isset($_POST["nom"])) {
    # code...
    $produitNom=$_POST["nom"];
    $produitReference=  md5($produitNom,false);
    $produitPrixAchat=$_POST["prixAchat"];
    $produitPrixVente=$_POST["prixVente"];
         
        global $wpdb;
//        $wpdb->show_errors()
        $produitTab =  'wp_ssd_produit';

        $row = $wpdb->get_row("SELECT * FROM $produitTab WHERE nom = '$produitNom' ");
        
      if (is_null($row)) {
            $wpdb->insert( $produitTab, array(
    
        'nom' => $produitNom,
        'reference' => $produitReference,
        'prix_achat'=>$produitPrixAchat,
        'prix_vente' => $produitPrixVente

    ) );

        echo "Produit ".$produitNom." ajouté" ;        
            //$wpbb->print_error();

      }else{
        echo "le Produit existe deja ";
      }



}
    die();
}

function sendPhpClient(){
if (isset($_POST["nom"])) {
    # code...
    $clientNom=$_POST["nom"];
    $clientPrenom=$_POST["prenom"];
    $clientReference= md5($clientNom.$clientPrenom,false);
         $clientNumero="0".$_POST["numero"];
         
        global $wpdb;
//        $wpdb->show_errors()

        $clientTab =  'wp_ssd_client';
        $row = $wpdb->get_row("SELECT * FROM $clientTab WHERE nom = '$clientNom' ");

         if (is_null($row)) {

            $wpdb->insert( $clientTab, array(
    
                'nom' => $clientNom,
                'prenom' => $clientPrenom,
                  'reference'=> $clientReference,
        'numero telephone' => $clientNumero
             ) );

            echo "Client ".$clientNom." ".$clientPrenom." ajouté" ;        
            //$wpbb->print_error();
          
          }else{
            echo "client existe deja";
          }      

}
    die();
}

function gethint(){

global $wpdb;
//        $wpdb->show_errors()

        $clientTab =  'wp_ssd_client';
        $a =$wpdb->get_results( "SELECT nom,prenom FROM wp_ssd_client   ", ARRAY_A);


$q = $_POST["q"];

$hint = array();
$i=0;
// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name["nom"], 0, $len))) {
            
              $sug=$name["nom"]." ".$name["prenom"];
                $hint[$i] = "$sug";
            $i++;
        }
    }
}
if (empty($hint)) {
  echo "pas de suggestion";
} else {
 echo json_encode($hint);
}
// Output "no suggestion" if no hint was found or output correct values 
//echo $hint === "" ? "Pas de suggestion" : json_encode($hint);

die();
}

add_action( 'wp_ajax_sendPhpProduit', 'sendPhpProduit' );
add_action( 'wp_ajax_nopriv_sendPhpProduit', 'sendPhpProduit' );

add_action( 'wp_ajax_sendPhpClient', 'sendPhpClient' );
add_action( 'wp_ajax_nopriv_sendPhpClient', 'sendPhpClient' );

add_action( 'wp_ajax_gethint', 'gethint' );
add_action( 'wp_ajax_nopriv_gethint', 'gethint' );





 ?>