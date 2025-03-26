<?php
//подключаем внешние файлы
include 'temp/head.php';
include 'temp/navbar.php';
include 'temp/header.php';

//выполним соединение с БД
$mysqli=new mysqli ("localhost", "root", "","baked"); //Подключаемся к базе данных

$mysqli->set_charset("utf8"); //Устанавливаем кодировку
?>
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
            $sql="SELECT name_product, price, weight, describes, img from product";
            $result=$mysqli->query($sql);
            foreach($result as $row){
                echo '<div class="col">
                <div class="card h-10">
                <img src="images/'.$row['img'].'" height="250" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">'.$row['name_product'].'</h5>
                    <p class="card-text">Описание: '.$row['describes'].'</p>
                    <p class="card-text">Вес: '.$row['weight'].' кг</p>
                    <p class="card-text">Цена: '.$row['price'].' руб.</p>
                </div>
                </div>
                </div>';
            }
        ?>
    </div>
</div>
<?php include 'temp/footer.php';  ?>
