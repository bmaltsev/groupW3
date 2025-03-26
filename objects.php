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
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-10">
                <img src="images/" height="250" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Ff</h5>
                        <p class="card-text">Описание: </p>
                        <p class="card-text">Вес:  кг</p>
                        <p class="card-text">Цена:  руб.</p>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php include 'temp/footer.php';  ?>
