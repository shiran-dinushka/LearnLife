<?php
session_start();
include 'connection.php';

$name=$_POST['name'];
$value=$_POST['value'];
$cid=$_SESSION['c_id'];


if($name=='Lessons'){
    $sqlU="UPDATE `course` SET `no_lessons`='$value' WHERE `C_id`='$cid'";

}elseif($name=="Duration"){
    $sqlU="UPDATE `course` SET `durations`='$value'  WHERE `C_id`='$cid'";

}else{
    $sqlU="UPDATE `course` SET `no_projects`='$value' WHERE `C_id`='$cid'";

}

$query= mysqli_query($con,$sqlU);






?>