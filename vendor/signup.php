<?php

    session_start();
    require_once '../config/connect.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {

        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`full_name`, `login`, `type`, `password`) VALUES ( '$full_name', '$login', '$type', '$password')");
        $user_id=mysqli_fetch_assoc(mysqli_query($connect, "SELECT MAX(id) FROM users"))['id'];
        switch($type){
            case 'dispetcher':
                mysqli_query($connect, "INSERT INTO `dispetcher` (`user_id`) VALUES ('$user_id')");
            case 'menedzher':
                mysqli_query($connect, "INSERT INTO `menedzher` ( `user_id`) VALUES ('$user_id')");
            case 'vodiy':
                mysqli_query($connect, "INSERT INTO `vodiy` (`user_id`) VALUES ('$user_id')");
            case 'zamovnik':
                mysqli_query($connect, "INSERT INTO `zamovnik` (`user_id`) VALUES ('$user_id')");
        }
        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../index.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }

?>
