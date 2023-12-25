<?php 


require '../config\connect.php'; 

$id=$_GET["id"];
$v_id=$_POST["vodiy_id"];

$res=mysqli_query($connect, "UPDATE `zamovlennya` SET `vodiy_id`='$v_id' WHERE order_id=$id");




header('Location: ../dispetcher.php');
