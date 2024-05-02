<?php
include '../model/mydb.php';
session_start();
if(isset($_REQUEST['submit']))
{
    if(empty($_REQUEST['email'])) 
    {
        echo "Enter a valid email address";
    }
    else if(empty($_REQUEST['password'])) 
    {
        echo "Enter a valid password";
    }
    else
    {
        $mydb= new Model();
        $conobj= $mydb->OpenCon();
       $result= $mydb->checkLoginCredentials($conobj, "student", 
        $_REQUEST['email'], $_REQUEST['password']);
        if($result->num_rows < 1)
        {
            echo "invalid credentials";
        }
        else{
            $_SESSION["username"]=$_REQUEST['email'];
            header("Location: ../view/profile.php");
        }

    }
   
}



?>