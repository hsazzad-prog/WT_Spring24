<?php
include '../controller/editusercontrol.php';

?>

<html>
Edit User
<form method="POST" action="">
<input type="text" name="name" value="<?php echo $name; ?>" />
<input type="password" name="password" value="<?php echo $password; ?>" />

<input type="submit" name="update" value="Update" />


</form>


<html>