<?php
session_start();
include('connection.php');
$id=$_SESSION['id'];


$sql ="UPDATE `messages` SET `status` = 'read' WHERE `ToUser` = '$id' ";
$query= mysqli_query($con,$sql);


header('location: ../Uside/chatSV.php');

?>