<?php
session_start();
include('connection.php');
$s_id=$_SESSION['id'];
$C_id=$_GET['l7sw'];

$sql="DELETE FROM `std_course` WHERE `L_Id`='$s_id' AND`C_id`='$C_id'";

$query=mysqli_query($con,$sql);

if($query){
    
    header('../Uside/course.html?el43=42l');
}



?>