<?php
include '../model/mydb.php';

$name=$email=$role=$password=$filename=$haserror="";
$nameError=$emailError=$roleError=$passwordError="";

if(isset($_REQUEST['Submit'])){
 if(!empty($_REQUEST["Name"])){
   $name=$_REQUEST['Name'];
 }
 else{
    $haserror=1;
    $nameError= "enter a name";
 }
 if(!empty($_REQUEST["Email"]))
{
   if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_REQUEST["Email"]))
{
    $haserror=1;
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

if(empty( $_FILES['file']['name']))
{
    echo "No file uploaded";
}
else{
    $filename="../upload/".$_REQUEST['Email'].".jpg";
move_uploaded_file($_FILES['file']['tmp_name'],$filename);
}

if($haserror!=1){
$mydb= new Model();
$conobj= $mydb->OpenCon();
$result=$mydb->AddStudent($conobj,"student",$_REQUEST["Name"],
$_REQUEST["Email"], $_REQUEST["Password"], $_REQUEST["role"],$filename);
if($result===TRUE)
{
    echo "Successfully Added";
}
else{
    echo "Error Occurred".$conobj->error;
}
}
else{
    echo "Please complete the validation ";
}

}
?> 
