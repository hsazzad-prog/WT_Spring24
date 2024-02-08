<?php
include '../controller/process.php';
?>
<html>
<head>
</head>
<body>
<h1> Hellow World HOME</h1>
<form method="POST" action="">
Name: <input type="text" name="Name" >
<?php echo $nameError; ?>
<br>
Email: <input type="text" name="Email" >
<?php echo $emailError; ?>
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
<input type="submit" name="Submit" value="SUBMIT">
</form>
</body>
</html>