<?php 

//footer
 ?>

<!-- impotjs -->
<script src="<?php  echo get_stylesheet_directory_uri(); ?>/js/jquery-3.1.0.min.js"></script>
<script>
	
	$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
});


//impression etat
function printPage() {
	//alert("buton print cliqué");
	
	fichierpdf.print();
}

document.getElementById('print').onclick=printPage;
//ajout produit	

function ajoutProd(){


	var tr= document.createElement("tr");
	var input=document.createElement("input")
	input.setAttribute("type","text");
	input.setAttribute("placeholder","votre text ici");

	// var td2=document.createElement("td")

	for (var i = 0; i < 4; i++) {
	tr.insertCell(i).innerHTML='<input type="text" style="padding:5px" placeholder=" ">';

	}
	
	// tr.insertCell(1).appendChild(input);
document.getElementById('table').appendChild(tr);

}

document.getElementById('ajoutProduit').onclick= ajoutProd;


// send ajax

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
	alert("fatet?")
	
// AJAX code to submit form.
$.ajax({
type: "POST",

data: {'url':"http://localhost/SSD/wp-content/themes/ssd/send.php" ,'data':dataString},
cache: false,
success: function(html) {
alert(dataString);
}
});
}
return false;
}

document.getElementById('sendAjax').onclick= sendAjax;

</script>

<!--  -->



 </body>
 	</html>