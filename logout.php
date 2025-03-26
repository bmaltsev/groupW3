<?php
include 'temp/mysql.php';
?>
<?php
session_start();
unset($_SESSION['id_user']);
unset($_SESSION['role']);
header("Location: index.php");
?>