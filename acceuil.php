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
 <div class="tab-pane fade" role="tabpanel" id="vente" aria-labelledby="vente-tab"> <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p> </div>  
</div>

  <button  class="btn btn-lg"><a style="color:white;display:inline;" href="<?php echo wp_logout_url(); ?>">Déconnexion</a></button>  
      </div>
      
  </section>
</div>

 		<?php get_footer(); ?>