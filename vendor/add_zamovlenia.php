<?php 


require '../config\connect.php'; 
$product_name=$_POST["product_name"];
$address_from=$_POST["address_from"];
$address_to=$_POST["address_to"];
$auto_type=$_POST["auto_type"];

$res=mysqli_query($connect, "INSERT INTO `zamovlennya`(`product_name`, `address_from`,`address_to`,`avto_type`) 
VALUES ('$product_name','$address_from','$address_to','$auto_type')");



header('Location: ../profile.php');
