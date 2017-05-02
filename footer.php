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

//ajout client	

function ajoutClient(){


	var tr= document.createElement("tr");
	var input=document.createElement("input")
	input.setAttribute("type","text");
	input.setAttribute("placeholder","votre text ici");

	// var td2=document.createElement("td")

	for (var i = 0; i < 3; i++) {
	tr.insertCell(i).innerHTML='<input type="text" style="padding:5px" placeholder=" ">';

	}
	
	// tr.insertCell(1).appendChild(input);
document.getElementById('table').appendChild(tr);

}

document.getElementById('ajoutclient').onclick= ajoutClient;

function ajoutVente(){


	var tr= document.createElement("tr");
	var input=document.createElement("input")
	input.setAttribute("type","text");
	input.setAttribute("placeholder","votre text ici");

	// var td2=document.createElement("td")

	for (var i = 0; i < 5; i++) {
	tr.insertCell(i).innerHTML='<input type="text" style="padding:5px" placeholder=" ">';

	}
	
	// tr.insertCell(1).appendChild(input);
document.getElementById('tableVente').appendChild(tr);

}

document.getElementById('ajoutVente').onclick= ajoutVente;


//commende

function sendCommend(){


	var produitNom = document.getElementsByTagName("input")[0].value;
var produitLargeur = document.getElementsByTagName("input")[1].value;
var produitLongeur = document.getElementsByTagName("input")[2].value;
//var produitPrix = document.getElementsByTagName("input")[3].value;

var ot=document.createElement("button")
ot.setAttribute("class","btn btn-default");
ot.setAttribute("id","printOt");
ot.innerHTML="Ordre de travaille";


// Returns successful data submission message when the entered information is stored in database.
var dataString = 'nom=' + produitNom + '&largeur=' + produitLargeur + '&longeur=' + produitLongeur ;
if (produitNom == '' || produitLargeur == '' || produitLongeur == '' ) {
alert("veuillez remplir les champs");
} else {
	
	var ajax_url= "<?php echo get_stylesheet_directory_uri(); ?>/send.php"
	var random= Math.floor((Math.random() * 10000) + 1);

// AJAX code to submit form.
$.ajax({
type: "POST",
url: ajax_url ,
data: dataString, 
cache: false,
success: function(html) {
alert("Commende N°"+ random+ "Ajouté");
}
});
document.getElementById("ot").appendChild(ot);
//impression ordre de travaille
function printOT() {
	//alert("buton print cliqué");
	
	otPdf.print();
}
document.getElementById('printOt').onclick=printOT;
}
return false;
}

document.getElementById('sendCommend').onclick= sendCommend;
//popover
//document.getElementById("pop").popover();



</script>

<!--  -->
<?php 

$handle="script";
$list="enqueued";
if (wp_script_is( $handle, $list )) {
       echo "marche";
     } else{
     	echo "walou 
     	";
     	} ?>

<?php wp_footer(); ?>
 </body>
 	</html>

 	<?php  ?>