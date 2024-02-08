<?php
$name=$uname=$role="";
$nameError=$unameError=$roleError="";

if(isset($_REQUEST['Submit'])){
 if(!empty($_REQUEST["Name"])){
   $name=$_REQUEST['Name'];
 }
 else{
    $nameError= "enter a name";
 }
 if(!empty($_REQUEST["Username"])){
    $uname=$_REQUEST['Username'];
 }
 else{
    $unameError= "enter a username";
 }
if(isset($_REQUEST['role'])){
 $role= $_REQUEST['role'] ;
}
else{
    $roleError= "enter a role";
}
}
?> 
