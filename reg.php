<?php
include 'temp/head.php';
include 'temp/header.php';
include 'temp/navbar.php';

$mysqli=new mysqli ("localhost", "root", "","baked"); //Подключаемся к базе данных
$mysqli->set_charset("utf8"); //Устанавливаем кодировку
 if (!empty($_POST)) {
   

    $login = $_POST['login'];
    $passw=$_POST['passw'];
    
    $hashPassword = password_hash($passw, PASSWORD_DEFAULT);
  
       $sql = "INSERT INTO users (login, passw) VALUES ('$login','$hashPassword')";
   
       $result = $mysqli->query($sql);
         }
    
    ?>
<section>
		<div class="container">
		<div class="row">
        <div class="col-md-12">
            <h1 class="font-weight-light">Регистрация</h1>
            <hr>
        </div>
    </div>
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center font-weight-light">Зарегистрироваться</h3>
                    <p class="card-text text-center text-muted">Уже есть аккаунт? Тогда используйте страницу <a href="auth.php">Авторизации</a></p>
                  
                    <hr>
                    <form action="" method="POST">
                 <div class="form-group">
                            <label for="exampleInputlogin">Логин</label>
                            <input name="login" required type="text" class="form-control" placeholder="Введите логин" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Пароль</label>
                            <input name="passw" required type="password" class="form-control" placeholder="Введите пароль">
                        </div> 
                        <div class="form-row justify-content-center">
						<a href="auth.php"><button type="submit" class="btn btn-outline-info">Зарегистрироваться</button></a>
                        </div>
                    </form>
                   