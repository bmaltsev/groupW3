<?php
ob_start();
//подключаем внешние файлы
include 'temp/head.php';
include 'temp/navbar.php';
include 'temp/header.php';
//выполним соединение с БД
$mysqli=new mysqli ("localhost", "root", "","baked"); //Подключаемся к базе данных

$mysqli->set_charset("utf8"); //Устанавливаем кодировку

$login = $_POST['login'];
$passw = $_POST['passw'];

$sql = "select * from users where login='$login'"; 

    $result = mysqli_query($mysqli,$sql);
    
           
    $row = mysqli_fetch_assoc($result);
    
    
		if(password_verify($passw, $row['passw']))
         {
            header("Location: index.php"); 
			exit();
		} 
        else {
			echo 'пароль не подошел';
		}
        
        
    
    ?>
    <div class="container">
</br>
    <div class="row">
        <div class="col-md-12">
            <h1 class="font-weight-light">Авторизация</h1>
            <hr>
        </div>
    </div>
    </br>
</br>
</br>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                <h3 class="card-title text-center font-weight-light">Войдите в свой аккаунт</h3>
                    <p class="card-text text-center text-muted">Добро пожаловать! Если вы не зарегистрированы, пройдите <a href="reg.php">Регистрацию</a> на сайте.</p>
                  
                    <hr>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Логин</label>
                            <input name="login" required type="text" class="form-control" placeholder="Введите логин" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Пароль</label>
                            <input name="passw" required type="password" class="form-control" placeholder="Введите пароль" id="exampleInputPassword1">
                        </div>
                      
                     
                        <div class="form-row justify-content-center">
                            <button type="submit" class="btn btn-outline-info px-5">Войти</button>
                        </div>
                    </form>