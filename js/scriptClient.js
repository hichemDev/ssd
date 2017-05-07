

	function sendAjax(){


	
			var clientNom = document.getElementsByTagName("input")[0].value;
			var clientPrenom = document.getElementsByTagName("input")[1].value;
			var clientNumero = document.getElementsByTagName("input")[2].value;
		// Returns successful data submission message when the entered information is stored in database.
		//var dataString = 'nom=' + produitNom + '&largeur=' + produitLargeur + '&longeur=' + produitLongeur + '&prix=' + produitPrix;
		if (clientNom == '' || clientNumero == ''  || clientPrenom == '') {
		alert("veuillez remplir les champs");
		} else {
			
			//var ajax_url= "<?php echo get_stylesheet_directory_uri(); ?>/send.php"
		// AJndAX code to submit form.
		$.ajax({
type: "POST",
url: ajaxurl ,

data:{action:"sendPhpClient",
	nom:clientNom,
	prenom:clientPrenom,
	numero:clientNumero
} , 
cache: false,
success: function(response) {
alert(response);
//window.location.reload();
//$('#myTabs a[href="#client"]').tab('show');
//$('#client').tab('show');
}
});	
		
		}
		return false;
		}


		document.getElementById('sendAjaxClient').onclick= sendAjax;
		




		