<?php
 /*
Template Name: testform
*/


 get_header(); ?>




<div class="conttainer">
	<section class="row">
		<div class="col-md-12">
			<form action=" http://localhost:8888/wordpress/redirection" method="POST" enctype="multipart/form-data">>
				<input type="text" placeholder="nom" name="nom">
				<input type="text" placeholder="prix" name="prix">

				<button type="submit">go</button>


			</form>
		</div>
	</section>
</div>