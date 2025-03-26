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
            <h2>Филиалы</h2>
            <table class="table">
                <tr>
                    <th>Номер филиала</th>
                    <th>Название филиала</th>
                    <th>Адрес</th>
                    <th>Номер телефона</th>
                </tr>
                <?php
                $sql = "SELECT * from branches";
                $result=$mysqli->query($sql);
                foreach($result as $row){
                    echo '<tr><td>'.$row['id_branch'].'</td>
                    <td>'.$row['name_branch'].'</td>
                    <td>'.$row['address_branch'].'</td>
                    <td>'.$row['phone_branch'].'</td></tr>';
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php include 'temp/footer.php';  ?>
</body>
</html>