<?php
include ("../model/mydb.php");

$userid = $_GET['userid'];
echo "Hello, " . $userid;


$mydb= new Model();
$conobj= $mydb->OpenCon();
$result= $mydb->getUserdata($conobj, "student", $userid);
if($result->num_rows > 0)
{
   foreach($result as $row)
   {
    echo "name:  " . $row["name"];
    echo "email: " . $row["email"];
    echo "profession: " . $row["profession"];
    echo "<img src='". $row["file"]. "' width='200'>";
   }
}
else{
   echo "no user found";
}




?>