
<?php
include '../../layouts/header.php';
include '../controller/process.php';

setcookie("user", "1", time()+86400*7);
if(isset($_COOKIE['user']))
{
    echo "Welcome Again to the home page";
}
else{
    echo "you have never visited me";
}
?>
<html>
<head>
<link rel="stylesheet" href="../css/mystyle.css">
</head>
<body>
<h1> Hellow World HOME</h1>
<form method="POST" action="" enctype="multipart/form-data" onsubmit="return validateForm()">
Name: <input type="text" name="Name" id="Name">
<div id="nameerror"><?php echo $nameError; ?></div>
<br>
Email: <input type="text" name="Email" >
<div id="error"><?php echo $emailError; ?></div>
<?php echo $email; ?>
<br>
Password: <input type="password" name="Password" >
<?php echo $passwordError; ?>
<br>
Choose a role
<input type="radio" name="role" value="teacher"> Teacher
<input type="radio" name="role" value="student"> Student
<?php echo $roleError; ?>
<?php echo $role; ?>
<br>
<input type="file" name="file" >
<br>
<input type="reset" name="reset" class="button reset" value="Reset">
<input type="submit" name="Submit" class="button submit" value="SUBMIT">
</form>

<script src="../js/myscript.js"></script>
</body>
</html>

<?php
include '../../layouts/footer.php';
?>