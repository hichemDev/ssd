<?php 
/*
Template Name: Acceuil
*/ 
 ?>			

 <?php get_header(); ?>
<div class="container">
  <section class="row">
    <div class="col-sx-12 col-md-12">
   

<ul class="nav nav-tabs" id="myTabs" role="tablist"> 
<li role="presentation" class="active">
<a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Accueil</a>
</li>
<li role="presentation"><a href="#client" role="tab" id="client-tab" data-toggle="tab" aria-controls="client">Client</a></li>

<li role="presentation"><a href="#produit" role="tab" id="produit-tab" data-toggle="tab" aria-controls="produit">Produit</a></li>

<li role="presentation"><a href="#vente" role="tab" id="vente-tab" data-toggle="tab" aria-controls="vente">Vente</a></li>
</ul>
<div class="tab-content" id="myTabContent"> 
<div class="tab-pane fade in active" role="tabpanel" id="home" aria-labelledby="home-tab"> 
     <!-- <h3> list Des ventes</h3> -->
    <div class="panel panel-default"> <div class="panel-heading">
    <section class="title">List Des ventes Quotidiennes</section>
    <section class="number right badge">Nombre des ventes 23</section>
    
    </div> 
    <div class="panel-body"> <p> </p> </div>
     <table class="table"> <thead> <tr> <th>N° de Commande</th> <th>Client</th> <th>Produit</th> <th>Prix</th><th>Date</th> </tr> 
     </thead> 
     <tbody> 
     <tr> <th scope="row">13452</th>
      <td>Mark zukerberg</td> 
      <td>GaLaxy S46</td> 
      <td>9900.00</td><td>12-04-2019</td> </tr> 
      
        </tbody> </table> </div>
<button id="print" class="btn btn-lg" style="display:inline;color:white;float: right;"  >Imprimerl'état</button>
<iframe id="fichierpdf" src="<?php echo get_stylesheet_directory_uri(); ?>
/etat.html" name="fichierpdf" type="application/pdf" style="display: none;"></iframe>

<iframe id="otPdf" src="<?php echo get_stylesheet_directory_uri(); ?>
/etat.html" name="otPdf" type="application/pdf" style="display: none;"></iframe>

</div> 

<div class="tab-pane fade" role="tabpanel" id="client" aria-labelledby="client-tab"> <div class="panel panel-default"> <div class="panel-heading">
    <section class="title">List Des clients</section>
    <?php 
      $page = (!empty($_GET['cpage']) ? $_GET['cpage'] : 1);
      $items_per_page = 1;
      $limite = 8;
      $offset = ( $page * $limite ) -($limite);
      $query=" SELECT * FROM wp_ssd_client ORDER BY id DESC LIMIT $offset, $limite ";

                    //$total_query = ' "SELECT COUNT(1) FROM (${query}) ' ; 
                  // $total = $wpdb->get_var(  $query );  
              
              
                        $wpdb->show_errors();
                        $results = $wpdb->get_results( $query , ARRAY_A);
                        $total = $wpdb->get_var( " SELECT COUNT(1) FROM wp_ssd_client ");


       //$results=$wpdb->get_results( "SELECT * FROM wp_ssd_client   ", ARRAY_A);
       $numbreClient= sizeof($results);

     ?>
    <section class="number right badge">Nombre de clients <?php echo $numbreClient; ?></section>
    
    </div> 
    <div class="panel-body"> <button type="button" id="ajoutclient" class="btn btn-default right" aria-label="Right Align" >
  <i class="fa fa-plus-circle left" style="font-size: 20px" aria-hidden="true"></i> Ajouter client 

</button> </div>
     <table  class="table"> <thead> <tr> <th>Nom  </th> <th>Prénom</th> <th>Numéro de télephone</th>  </tr> 
     </thead> 
     <tbody id="table"> 
     <tr> <th scope="row">Abdi</th>
      <td>Hichem</td> 
      <td>056432312</td> 
       </tr> 

       <?php 
       foreach ($results as $result ) {
        ?> 
       <tr> <th scope="row"><?php echo $result["nom"]; ?></th>
      <td><?php echo $result["prenom"]; ?></td> 
      <td> 0<?php echo $result["numero telephone"]; ?></td> 
       </tr>
        
      <?php
        }
        ?>
        </tbody> </table> 
        <nav>

             <center><?php

                echo '<div class="pagination">';
                echo paginate_links( array(
                'base' => add_query_arg( 'cpage', '%#%' ),
                'format' => '',
                'prev_text' => __('&laquo;'),
                'next_text' => __('&raquo;'),
                'total' => ceil($total / $limite),
                'current' => $page
                
                ));
                echo '</div>';             ?></center>
                </nav>
        </div>
        <button id="sendAjaxClient" class="btn btn-lg" style="display:inline;color:white;float: right;"  >Enregistrer Client</button>

 </div> 

<div class="tab-pane fade" role="tabpanel" id="produit" aria-labelledby="produit-tab"> <div class="panel panel-default"> <div class="panel-heading">
    <section class="title">List Des produits</section>
    <section class="number right badge">Nombre de produits 243</section>
    
    </div> 
    <div class="panel-body"> <button type="button" id="ajoutProduit" class="btn btn-default right" aria-label="Right Align" >
  <i class="fa fa-plus-circle left" style="font-size: 20px" aria-hidden="true"></i> Ajouter Produit 

</button> </div>
     <table  class="table"> <thead> <tr> <th>Nom du Produit </th> <th>Largeur(m²)</th> <th>Longeur(m²)</th> <th>Prix</th> </tr> 
     </thead> 
     <tbody id="table"> 
     <tr> <th scope="row">Galaxy</th>
      <td>2.5</td> 
      <td>3.8</td> 
      <td>9900.00</td> </tr> 
      
        </tbody> </table> </div>
        <button id="sendAjax" class="btn btn-lg" style="display:inline;color:white;float: right;"  >Enregistrer produit</button>

 </div> 


<div class="tab-pane fade" role="tabpanel" id="vente" aria-labelledby="vente-tab"> <div class="panel panel-default"> <div class="panel-heading">
    <section class="title">List Des ventes</section>
    <section class="number right badge">Nombre de Commande 243</section>
    
    </div> 
    <div id="ot" class="panel-body"> <button type="button" id="ajoutVente" class="btn btn-default right" aria-label="Right Align" >
  <i class="fa fa-plus-circle left" style="font-size: 20px" aria-hidden="true"></i> Ajouter commande 

</button> </div>
     <table id="tableVente" class="table"> <thead> <tr> <th>Nom du Produit </th><th>Nom du Client</th> <th>Largeur(m²)</th> <th>Longeur(m²)</th> <th>Prix</th> <th></th></tr> 
     </thead> 
     <tbody id="table"> 
     <tr> <th scope="row">Galaxy</th>
     <th>Client</th>
      <td>2.5</td> 
      <td>3.8</td> 
      <td>9900.00</td> 
      <td class="hover" id="pop" ><i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size: 18px;"></i>
      <div id="options">
        <i class="fa fa-times" aria-hidden="true" style="color:#96281b" style="font-size: 18px;"></i>
         <i class="fa fa-pencil" aria-hidden="true" style="color:#26A65B;font-size: 18px;"></i> 
         <i class="fa fa-clipboard" aria-hidden="true" style="color:#F7CA18;font-size: 18px;;"></i>


      </div></td> </tr> 
      
        </tbody> </table> </div>
        <button id="sendCommend" class="btn btn-lg" style="display:inline;color:white;float: right;"  >Enregistrer vente</button>

 </div> 

 </div> 
  


  <button  class="btn btn-lg"><a style="color:white;display:inline;" href="<?php echo wp_logout_url(); ?>">Déconnexion</a></button>  
      </div>
      
  </section>
</div>

 		<?php get_footer(); ?>