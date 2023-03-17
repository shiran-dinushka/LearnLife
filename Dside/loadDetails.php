<?php
include('connection.php');
session_start();

$name=$_SESSION['Name'];


if(isset($name)){
    $sql="SELECT * FROM `login` WHERE `Fname`='$name'";

    $query=mysqli_query($con,$sql);
    if(mysqli_num_rows($query)>0){
        $array= mysqli_fetch_assoc($query);
        $arry=json_encode($array);
        echo $arry;
    }else{
        echo 'error';
    }
}else{
    echo 'error';
}
?>