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
    function checkLoginCredentials($conn,$table, $email,$password){
      $sql="SELECT email, password from $table WHERE email = '$email' AND 
      password = '$password'";
      $result = $conn->query($sql);
      return $result;
    }
    function getAllusers($conn,$table){
      $sql="SELECT * FROM $table";
      $result = $conn->query($sql);
      return $result;
    }
    function getUserdata($conn,$table,$userid)
    {
      $sql="SELECT * FROM $table WHERE id = '$userid'";
      $result=$conn->query($sql);
      return $result;
    }
    function updateUser($conn,$table,$userid,$name,$password)
    {
      $sql="UPDATE $table SET name='$name', password='$password' WHERE id='$userid'";
      $result=$conn->query($sql);
      return $result;

    }



}

?>