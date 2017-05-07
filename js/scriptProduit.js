

	function sendAjax(){


			var produitNom = document.getElementsByTagName("input")[0].value;
			var produitRef = document.getElementsByTagName("input")[1].value;

		var produitPrixAchat = document.getElementsByTagName("input")[2].value;
		var produitPrixVente = document.getElementsByTagName("input")[3].value;
		
		// Returns successful data submission message when the entered information is stored in database.
		var dataString = 'nom=' + produitNom + '&prixAchat=' + produitPrixAchat + '&prixVente=' + produitPrixVente ;
		if (produitNom == '' || produitPrixAchat == '' || produitPrixVente == '' ) {
		alert("veuillez remplir les champs");
		} else {
			
			//var ajax_url= "<?php echo get_stylesheet_directory_uri(); ?>/send.php"
		// AJndAX code to submit form.
		$.ajax({
type: "POST",
url: ajaxurl ,

data:{action:"sendPhpProduit",
	nom:produitNom,
	prixAchat:produitPrixAchat,
	prixVente:produitPrixVente
	
} , 
cache: false,
success: function(response) {
alert(response);
}
});
		
		}
		return false;
		}


		document.getElementById('sendAjax').onclick= sendAjax;
		




		