<?php
$name=$email=$role=$password="";
$nameError=$emailError=$roleError=$passwordError="";

if(isset($_REQUEST['Submit'])){
 if(!empty($_REQUEST["Name"])){
   $name=$_REQUEST['Name'];
 }
 else{
    $nameError= "enter a name";
 }
 if(!empty($_REQUEST["Email"]))
{
   if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_REQUEST["Email"]))
{
    $emailError= "please enter a valid email address";

}
else{
    $email= $_REQUEST['Email'];
}

}
else{
    $emailError= "Email is Required";
}

if(strlen($_REQUEST['Password'])<6 ){
    $passwordError= " Password must be at least 6 characters";
   }
   else{
    $password= $_REQUEST['Password'] ;
    }

if(isset($_REQUEST['role'])){
 $role= $_REQUEST['role'] ;
}
else{
    $roleError= "enter a role";
}

}
?> 
