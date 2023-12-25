<?php 


require '../config\connect.php'; 
$id=$_GET["id"];
$station_id_from=$_POST["station_id_from"];
$station_id_to=$_POST["station_id_to"];

$res=mysqli_query($connect, "UPDATE `zamovlennya` SET `address_from`='',`address_to`='',`station_id_from`='$station_id_from',`station_id_to`='$station_id_to' WHERE order_id=$id");




header('Location: ../menedzher.php');
