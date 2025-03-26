<body>
<?php
include 'temp/head.php';
include 'temp/mysql.php';
include 'temp/nav.php';
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Авторизация</h2>
            <form method="POST">
            <div class="mb-3">
                <label class="form-label">Логин</label>
                <input type="text" class="form-control" name="login" required>
                <div class="form-text">Введите ваш логин</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Пароль</label>
                <input type="password" class="form-control" name="password" required>
                <div class="form-text">Введите ваш пароль</div>
            </div>
            <button type="submit" class="btn btn-primary">Далее</button>
            </form>
            <?php
                if(!empty($_POST)){
                    $login = $_POST['login'];
                    $password = $_POST['password'];
                    $sql = "SELECT id_user, firstname, lastname, role FROM users where login = '$login' and password = '$password'";
                    $result = $mysqli->query($sql);
                    $row = mysqli_fetch_assoc($result);
                    $id_user = $row['id_user'];
                    $firstname = $row['firstname'];
                    $lastname = $row['lastname'];
                    $role = $row['role'];
                    mysqli_free_result($result);
                    if($id_user and $role == 'Клиент'){
                        session_start();
                        $_SESSION['id_user'] = $id_user;
                        $_SESSION['firstname'] = $firstname;
                        $_SESSION['lastname'] = $lastname;
                        $_SESSION['role'] = $role;
                        header("Location: index.php");
                    }
                    elseif($id_user and $role == 'Страховой агент'){
                        session_start();
                        $_SESSION['id_user'] = $id_user;
                        $_SESSION['firstname'] = $firstname;
                        $_SESSION['lastname'] = $lastname;
                        $_SESSION['role'] = $role;
                        header("Location: index.php");
                    }
                    else{
                        echo 'Не верен логин или пароль';
                    }
                }
                ?>
        </div>
    </div>
</div>
<?php include 'temp/footer.php';  ?>
</body>
</html>