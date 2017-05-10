
    

/// autocompletion


function showHint(str) {
    
    var conteur=0;
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

    //alert(response);
//var option=document.createElement("option");
var selection=document.getElementsByTagName("select")[0];
selection.style.display="block";
var frag = document.createDocumentFragment();
    //selection.removeChild(frag);
for (var i = 0; i < response.length; i++) {
    var option = document.createElement("option");
    frag.appendChild(option);
  option.value= conteur++;
option.innerHTML=response[i]
}

selection.appendChild(frag);

}
});

    }
}
