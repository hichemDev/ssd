
    

/// autocompletion


function showHintClient(str) {
    var fragment  =new Array();
    var K= 0;
    var conteur= 0;
    if (str.length == 0) { 
        document.getElementsByTagName("input")[1].innerHTML = "";
        return;
    } else {
        var q= document.getElementsByTagName("input")[1].value;

       $.ajax({
type: "POST",
url: ajaxurl ,
 
data:{action:"gethint",

    q:q
    
} , 
dataType: 'json',
cache: false,
success: function(response) {
     //init list
    //selection.removeChild(frag);
response= response.split(",");
   // alert(response);
//var option=document.createElement("option");
var selection=document.getElementsByTagName("select")[0];
selection.style.display="block";
var frag = document.createDocumentFragment();
//fragment[k]=frag;

    //selection.removeChild(frag);
for (var i = 0; i < response.length; i++) {
    var option = document.createElement("option");
    frag.appendChild(option);
  option.value= conteur++;
option.innerHTML=response[i]
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
