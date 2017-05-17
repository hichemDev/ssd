
    

/// autocompletion


function showHintProduit(str) {
  var optionArray= new Array();
    var fragment  =new Array();
    var x = 0;
    var conteur= 0;
    if (str.length == 0) { 
        document.getElementsByTagName("input")[0].innerHTML = "";
        return;
    } else {
        var q= document.getElementsByTagName("input")[0].value;

       $.ajax({
type: "POST",
url: ajaxurl ,
 
data:{action:"getHintProduit",
dataType: 'json',

    q:q
    
} , 
//contentType: 'application/json; charset=UTF-8',
cache: false,
success: function(responseProduit) {
     //init list
    //selection.removeChild(frag);
   var array = JSON.parse(responseProduit);
    
alert(array["nom"]);    
    
responseProduit= responseProduit.split(",");
   // alert(responseProduit);
//var option=document.createElement("option");

var selection=document.getElementsByTagName("select")[0];
selection.style.display="block";
var frag = document.createDocumentFragment();
//fragment[k]=frag;

    //selection.removeChild(frag);
for (var i = 0; i < array.length; i++) {
    var option = document.createElement("option");
    frag.appendChild(option);
  option.value= array[i]["prix_vente"];
option.innerHTML=array[i]["nom"];
optionArray[i]=array[i]["prix_vente"];
//var inputOption= document.createElement("input");
//document.getElementsByTagName("td")[0].appendChild(inputOption);
//inputOption.style.display="none";
//inputOption[i].value= optionArray[i];
}
selection.appendChild(frag);

//if (k==0) {selection.appendChild(fragment[k]);} 
//else {
//selection.removeChild(fragment[k-1]);
//selection.appendChild(fragment[k]);
//}

 //k++;


}
});

    }
}
