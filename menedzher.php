<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
require './config/connect.php';
$zamovlenia_id=$_GET['id'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Менеджер</title>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
<a href="vendor/logout.php" class="logout">Вихід</a>
    <div class="container">
        <h2><?= $_SESSION['user']['full_name'] ?></h2>
        <form action="./vendor/add_zamovlenia1.php?id=<?=$zamovlenia_id?>" method="post">
            <label for="station_from">Станція відправки:</label>
            <select name="station_from" id="station_from">
                <?php
                $result = mysqli_query($connect, "SELECT * FROM station;");
                while ($item = mysqli_fetch_array($result)) {
                ?>
                <option value="<?=$item[0]?>">Стація №<?=$item[0]?></option>
                <?php
                }
                ?>
            </select>
            <label for="station_to">Станція доставки:</label>
            <select name="station_to" id="station_to">
                <?php
                $result = mysqli_query($connect, "SELECT * FROM station;");
                while ($item = mysqli_fetch_array($result)) {
                ?>
                <option value="<?=$item[0]?>">Стація №<?=$item[0]?></option>
                <?php
                }
                ?>
            </select>
            <button type="submit">Замовити</button>
        </form>
    </div>
</body>
</html>