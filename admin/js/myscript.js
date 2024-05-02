
function validateForm(){
 if(validateName()==false){
    return false;
 }
 else{
    return
 }
}

function validateName(){
    var name = document.getElementById("Name").value;
    if(name==""){
        document.getElementById("nameerror").innerHTML = "Please enter your name";  
return false;
    }
    else{
return true;
    }
}

function searchUser(){
var id=document.getElementById("search").value;
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function(){
    if(this.readyState==4 && this.status== 200)
    {
        document.getElementById("print").innerHTML = this.responseText;
    }
    
};
xhttp.open("GET", "http://localhost/wtg/admin/controller/searchuser.php?userid="+id, true);
xhttp.send();
}

