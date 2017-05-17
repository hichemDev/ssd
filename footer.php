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
document.getElementById('tableProduit').appendChild(tr);

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

// ajout proformat

function ajoutProformat(){
var j=0;
var  trLigne=2;
//list pour les hints
var selectProduit=document.createElement("select");
    //select.multiple=true;
    selectProduit.style.display="none";
var selectClient=document.createElement("select");
    //select.multiple=true;
    selectClient.style.display="none";

	var tr= document.createElement("tr");
	var input=document.createElement("input")
	input.setAttribute("type","text");
	input.setAttribute("placeholder","votre text ici");

	// var td2=document.createElement("td")

	for (var i = 0; i <= 5; i++) {
	tr.insertCell(i).innerHTML='<input type="text" style="padding:5px" placeholder=" ">';

	}
	tr.insertCell(6).innerHTML='<button id="ajoutligne" ><i  class="fa fa-plus-circle left" style="font-size: 20px" aria-hidden="true"></i></button>'; 
	// tr.insertCell(1).appendChild(input);
document.getElementById('tableProformat').appendChild(tr);

document.getElementsByTagName("input")[0].setAttribute('onkeyup','showHintProduit(this.value)');
document.getElementsByTagName("input")[1].setAttribute('onkeyup','showHintClient(this.value)');
var proformatTab= document.getElementById("tableProformat");
    var secondeLigne=proformatTab.getElementsByTagName("tr")[2];
    secondeLigne.getElementsByTagName("td")[0].appendChild(selectProduit);

    secondeLigne.getElementsByTagName("td")[1].appendChild(selectClient);

    selectProduit.addEventListener("change", myScriptProduit);
    //selectProduit.addEventListener("click", myScriptProduit);

function myScriptProduit() {
	// body...
	//alert ("option choisie "+ select.options[select.selectedIndex].text)
	 document.getElementsByTagName("input")[j].setAttribute("placeholder",selectProduit.options[selectProduit.selectedIndex].text);
	 document.getElementsByTagName("input")[j].value= selectProduit.options[selectProduit.selectedIndex].text;
	 document.getElementsByTagName("input")[j].innerHTML= selectProduit.options[selectProduit.selectedIndex].text;
	 //secondeLigne.getElementsByTagName("td")[1].value=select.options[select.selectedIndex].text;;
    selectProduit.style.display="none";
var indexOption= selectProduit.selectedIndex;
document.getElementsByTagName("input")[j+5].value=selectProduit.value;
document.getElementsByTagName("input")[j+5].innerHTML=selectProduit.value;
selectProduit.options.length= 0;
selectProduit.remove();
}

selectClient.addEventListener("change", myScript);
selectClient.addEventListener("click", myScript);

function myScript() {
	// body...
	//alert ("option choisie "+ select.options[select.selectedIndex].text)
	 document.getElementsByTagName("input")[1].setAttribute("placeholder",selectClient.options[selectClient.selectedIndex].text);
	 document.getElementsByTagName("input")[1].value= selectClient.options[selectClient.selectedIndex].text;
	 document.getElementsByTagName("input")[1].innerHTML= selectClient.options[selectClient.selectedIndex].text;
	 //secondeLigne.getElementsByTagName("td")[1].value=select.options[select.selectedIndex].text;;
    selectClient.style.display="none";
selectClient.options.length= 0;
selectClient.remove();



}
var inputLagreur=document.getElementsByTagName("input")[3];
var inputLongeur=document.getElementsByTagName("input")[4];

inputLongeur.addEventListener("input", calculePrix);

	function calculePrix(){
	var inputLagreurMesure= inputLagreur.value;

		var prixVente= inputLagreurMesure * inputLongeur.value * selectProduit.value;
		document.getElementsByTagName("input")[5].innerHTML = prixVente;
		document.getElementsByTagName("input")[5].value = prixVente;

	}
 selectProduit.options.length = 0;

//ajout ligne proformat

function ajoutligne(){
	 j=j+6;
	 //var k=j+1;
	 //alert("nombre k = "+k);
	var tr= document.createElement("tr");
	for (var i = 0; i <= 5; i++) {
tr.insertCell(i).innerHTML='<input type="text" style="padding:5px" placeholder=" "> </input>';

	}
document.getElementById('tableProformat').appendChild(tr);

	  trLigne++;
	  var proformatTab= document.getElementById("tableProformat");
    var LigneTable=proformatTab.getElementsByTagName("tr")[trLigne];
    var hintProduit= document.createElement("select");
    LigneTable.getElementsByTagName("td")[0].appendChild(selectProduit);
    //selectProduit.style.display="block";

	document.getElementsByTagName("input")[j].setAttribute('onkeyup','showHintProduit(this.value)');



	//selectProduit.style.display="block";

	var placeholder=document.getElementsByTagName("input")[1].value;
	document.getElementById('tableProformat').appendChild(tr);
	 document.getElementsByTagName("input")[j+1].setAttribute("placeholder",placeholder);
	 document.getElementsByTagName("input")[j+1].value=placeholder;

hintProduit.addEventListener("change",emptyScript);
function emptyScript(){

	hintProduit.options.lenght =0;
}
	
}

document.getElementById('ajoutligne').onclick= ajoutligne;

}

document.getElementById('ajoutProformat').onclick= ajoutProformat;



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