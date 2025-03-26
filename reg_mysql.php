<?php
    include 'temp/mysql.php';
    if(!empty($_POST)){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $surname = $_POST['surname'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $role = $_POST['role'];
        $sql = "INSERT INTO users (firstname, lastname, surname, login, password, address, phone, role) VALUES ('$firstname', '$lastname', '$surname', '$login', '$password', '$address', $phone, '$role')";
        $result = $mysqli->query($sql);
        $mysqli->close();
    }
    header("Location: login.php");
?>