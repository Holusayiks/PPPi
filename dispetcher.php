<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
require './config/connect.php';
$zamovlenia_id=$_GET['id'];
$zam=mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM zamovlennya WHERE order_id=$zamovlenia_id;"));
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
        <form action="./vendor/add_zamovlenia2.php?id=<?=$zamovlenia_id?>" method="post">
        <p>Товар:<?=$zam[7]?></p>
        <p>Станція відправлення:<?=$zam[4]?></p>
        <p>Станція доставки:<?=$zam[6]?></p>
            <label for="vodiy_id">Водій:</label>
            <select name="vodiy_id" id="vodiy_id">
                <?php
                $result = mysqli_query($connect, "SELECT * FROM vodiy;");
                while ($item = mysqli_fetch_array($result)) {
                ?>
                <option value="<?=$item[0]?>"><?=$item[1]?></option>
                <?php
                }
                ?>
            </select>
            <button type="submit">Підвердити</button>
        </form>
    </div>
<a href="vendor/logout.php" class="logout">Вихід</a>

</body>
</html>