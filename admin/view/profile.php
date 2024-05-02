<?php
session_start();
echo $_SESSION['username'];
?>

<html>


<body>

My Profile


<a href="../controller/logout.php">Logout</a>

</body>
</html>