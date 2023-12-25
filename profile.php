<?php
session_start();

switch($_SESSION['user']['type'] ){
    case 'dispetcher':
        header('Location: ./dispetcher.php');
    case 'menedzher':
        header('Location: ./menedzher.php');
    case 'vodiy':
        header('Location: ./vodiy.php');
    case 'zamovnik':
        header('Location: ./zamovnik.php');

}
?>  
<a href="vendor/logout.php" class="logout">Вихід</a>