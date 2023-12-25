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
        <form action="./vendor/add_vodiy_info.php" method="post">
            <p><?=$zamovlennya[1]?></p>
            <button>...</button>
            <button>Затвердити</button>
        </form>
    </div>

</body>
</html>