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
     <h3> list Des ventes</h3>
    <div class="panel panel-default"> <div class="panel-heading">
    <section class="title">Panel heading</section>
    <section class="number right">23</section>
    
    </div> 
    <div class="panel-body"> <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> </div> <table class="table"> <thead> <tr> <th>#</th> <th>First Name</th> <th>Last Name</th> <th>Username</th> </tr> </thead> <tbody> <tr> <th scope="row">1</th> <td>Mark</td> <td>Otto</td> <td>@mdo</td> </tr> <tr> <th scope="row">2</th> <td>Jacob</td> <td>Thornton</td> <td>@fat</td> </tr> <tr> <th scope="row">3</th> <td>Larry</td> <td>the Bird</td> <td>@twitter</td> </tr> </tbody> </table> </div>


</div> 
<div class="tab-pane fade" role="tabpanel" id="produit" aria-labelledby="produit-tab"> <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p> </div> <div class="tab-pane fade" role="tabpanel" id="vente" aria-labelledby="vente-tab"> <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p> </div>  
</div>

  <button  class="btn btn-lg"><a style="color:white" href="<?php echo wp_logout_url(); ?>">Déconnexion</a></button>  

    </div>
      
  </section>
</div>
 		