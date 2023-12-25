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
    <title>Менеджер</title>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
<a href="vendor/logout.php" class="logout">Вихід</a>
    <div class="container">
        <h2><?= $_SESSION['user']['full_name'] ?> (Менеджер)</h2>
        <?php
        $data = mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `zamovlennya` WHERE `station_id_from`='';"));
        print_r($data);     
        foreach($data as $zamovlennya){   
            print($zamovlennya);       
       ?>  
       <a href="./menedzher?id=<?=$zamovlennya[0]?>"><?=$zamovlennya[7]?> (<?=$zamovlennya[9]?> - <?=$zamovlennya[10]?>)</a>
       <?php
        }
       ?>
       
    </div>
</body>
</html>