
    

/// autocompletion


function showHint(str) {
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
cache: false,
success: function(response) {
alert(response);
document.getElementsByTagName("input")[1].innerHTML = response;
}
});

    }
}
