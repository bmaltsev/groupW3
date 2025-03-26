<body>
<?php
include 'temp/head.php';
include 'temp/mysql.php';
include 'temp/nav.php';
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Регистрация</h2>
            <form method="POST" action="reg_mysql.php">
            <div class="mb-3">
                <label class="form-label">Ваше имя</label>
                <input type="text" class="form-control" name="firstname" required>
                <div class="form-text">Не более 16 символов.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Ваша фамилия</label>
                <input type="text" class="form-control" name="lastname" required>
                <div class="form-text">Не более 16 символов.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Ваше отчество</label>
                <input type="text" class="form-control" name="surname" required>
                <div class="form-text">Не более 16 символов.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Логин</label>
                <input type="text" class="form-control" name="login" required>
                <div class="form-text">Не более 16 символов.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Пароль</label>
                <input type="password" class="form-control" name="password" required>
                <div class="form-text">Не более 24 символа.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Ваш адрес</label>
                <input type="text" class="form-control" name="address" required>
                <div class="form-text">Не более 24 символа.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Номер телефона</label>
                <input type="phone" class="form-control" name="phone" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Ваша роль</label>
                <select class="form-control" name="role">
                    <option value="Клиент">Клиент</option>
                    <option value="Страховой агент">Страховой агент</option>
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