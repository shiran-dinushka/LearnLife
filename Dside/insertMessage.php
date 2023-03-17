<?php

session_start();
include("connection.php");


if(isset($_POST['fromUser']) || isset($_POST['toUser'])){
    $fromUser= $_POST['fromUser'];
    $toUser= $_POST['toUser'];
    $message = $_POST['message'];

    $output= "";

    $sql= "INSERT INTO messages (`FromUser`,`ToUser`,`Messages`,`status`) VALUES ('$fromUser','$toUser','$message','unread')";

    if(mysqli_query($con,$sql)){
        $output="";
    }else{
        $output="Error. Please Try Again.";
    }
    echo $output;
}

if(isset($_GET['l1r'])){
    $sql="DELETE FROM `messages` WHERE `C_id`='".$_GET['l1r']."'";
    $query=mysqli_query($con,$sql);
    if($query){
        if($_SESSION['Role']=='admin'){
            header('location: ../Uside/chatTView.php');
        }else{
            header('location: ../Uside/chatSV.php');
        }
    }else{
        echo "error";
    }

}

?>