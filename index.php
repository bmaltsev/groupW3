<?php
session_start();
include 'temp/head.php';
include 'temp/mysql.php';
if($_SESSION['role'] == 'Клиент' and ['id_user']){
    include 'temp/nav_client.php';
}
elseif($_SESSION['role'] == 'Страховой агент' and ['id_user']){
    include 'temp/nav_agent.php';
}
else{
    include 'temp/nav.php';
}
?>
<div class="container">

</div>
<?php include 'temp/footer.php';  ?>
