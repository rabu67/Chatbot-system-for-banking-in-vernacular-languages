<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>

<html>
<body>
<h1> welcome <?php echo $_SESSION['username']; ?> </h1>
    
    <a href="logout.php"> LOGOUT </a>
</body>
</html>