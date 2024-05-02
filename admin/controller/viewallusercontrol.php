<?php
include '../model/mydb.php';


$mydb = new Model();
$conobj = $mydb->openCon();
$result=$mydb->getAllusers($conobj,"student");



?>