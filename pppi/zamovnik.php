<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
require './config/connect.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
    <div class="container">
        <h2><?= $_SESSION['user']['full_name'] ?></h2>
        <form action="./vendor/add_zamovlenia.php" method="POST">
            <label for="product_name">Товар:</label>
            <input type="text" name="product_name" id="product_name">
            <label for="product_name">Адреса відправки:</label>
            <input type="text" name="address_from" id="address_from">
            <label for="address_to">Адреса доставки:</label>
            <input type="text" name="address_to" id="address_to">
            <label for="auto_type">Тип авто:</label>
            <select name="auto_type" id="station">
                <option value="">Обрати</option>
                <option value="зерновоз">зерновоз</option>
                <option value="цестерна">цестерна</option>
                <option value="контейнер">контейнер</option>
            </select>
            <button type="submit">Замовити</button>
        </form>
    </div>
<a href="vendor/logout.php" class="logout">Вихід</a>

</body>
</html>