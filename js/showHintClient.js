
    

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
 
data:{action:"getHintClient",

    q:q
    
} , 
dataType: 'json',
cache: false,
success: function(responseClient) {
     //init list
    //selectionClient.removeChild(frag);
responseClient= responseClient.split(",");
   // alert(responseClient);
//var option=document.createElement("option");
var selectionClient=document.getElementsByTagName("select")[0];
selectionClient.style.display="block";
var frag = document.createDocumentFragment();
//fragment[k]=frag;

    //selectionClient.removeChild(frag);
for (var i = 0; i < responseClient.length; i++) {
    var option = document.createElement("option");
    frag.appendChild(option);
  option.value= conteur++;
option.innerHTML=responseClient[i]
}
selectionClient.appendChild(frag);

//if (k==0) {selectionClient.appendChild(fragment[k]);} 
//else {
//selectionClient.removeChild(fragment[k-1]);
//selectionClient.appendChild(fragment[k]);
//}

 //k++;


}
});

    }
}
