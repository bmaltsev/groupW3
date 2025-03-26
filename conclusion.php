<body>
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
    <div class="row">
        <div class="col">
            <h2>Заключить договор</h2>
            <form method="POST" action="reg_mysql.php">
            <div class="mb-3">
                <label class="form-label">Филиалы</label>
                <select class="form-control" name="branch">
                    <?php
                    $sql="SELECT * FROM branches";
                    $result=$mysqli->query($sql);
                    foreach($result as $row){
                        echo '<option value="'.$row['id_branch'].'">'.$row['name_branch'].'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Объекты страхования</label>
                <select class="form-control" name="type_insurance">
                    <option value="Автотранспорта от угона">Автотранспорта от угона</option>
                    <option value="Домашнего имущества">Домашнего имущества</option>
                    <option value="Добровольное медицинское">Добровольное медицинское</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Виды страхования</label>
                <select class="form-control" name="type_insurance">
                    <option value="Автотранспорта от угона">Автотранспорта от угона</option>
                    <option value="Домашнего имущества">Домашнего имущества</option>
                    <option value="Добровольное медицинское">Добровольное медицинское</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Далее</button>
            </form>
        </div>
    </div>
</div>
<?php include 'temp/footer.php';  ?>
</body>
</html>