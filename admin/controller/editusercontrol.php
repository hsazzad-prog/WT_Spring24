<?php
include '../model/mydb.php';

$userid=$_GET['userid']; 

$mydb= new Model();

$conobj= $mydb->openCon();
$result = $mydb->getUserdata($conobj,"student",$userid);
if($result->num_rows>0  ){
    foreach($result as $row){
        $name=$row['name']; 
        $password=$row['password'];
        $profession=$row['profession'];
    }
}

if(isset($_REQUEST['update'])){
    
}

?>