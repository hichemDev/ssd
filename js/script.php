<script> 

		function sendAjax(){


			var produitNom = document.getElementsByTagName("input")[0].value;
		var produitLargeur = document.getElementsByTagName("input")[1].value;
		var produitLongeur = document.getElementsByTagName("input")[2].value;
		var produitPrix = document.getElementsByTagName("input")[3].value;
		// Returns successful data submission message when the entered information is stored in database.
		var dataString = 'nom=' + produitNom + '&largeur=' + produitLargeur + '&longeur=' + produitLongeur + '&prix=' + produitPrix;
		if (produitNom == '' || produitLargeur == '' || produitLongeur == '' || produitPrix == '') {
		alert("veuillez remplir les champs");
		} else {
			
			//var ajax_url= "<?php echo get_stylesheet_directory_uri(); ?>/send.php"
		// AJAX code to submit form.
		jQuery.post(ajaxurl, dataString, function(response) {
			alert('Got this from the server: ' + response);
		});
		
		}
		return false;
		}
		document.getElementById('sendAjax').onclick= sendAjax;
		</script>
