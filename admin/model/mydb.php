<?php
class Model
{

    function OpenCon(){
      $conn= new mysqli("localhost","root","","secg");
      return $conn;
    }
    function AddStudent($conn,$table, $name, $email, 
    $password, $profession, $file){
        $sql="INSERT INTO $table (name,email, password, profession, file) VALUES 
        ('$name', '$email', '$password', '$profession', '$file')";
       $result= $conn->query($sql);
       return $result;
    }

}

?>