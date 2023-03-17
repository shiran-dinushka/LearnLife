<?php
session_start();
include('connection.php');
$id=$_SESSION['id'];
$cid=$_SESSION['c_id'];

$sql ="UPDATE `messages`,`std_course` SET `status` = 'read' WHERE `ToUser` = '$id' AND std_course.L_Id=messages.FromUser AND std_course.C_id='".$_SESSION['c_id']."'";
$query= mysqli_query($con,$sql);



?>