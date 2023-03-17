<?php
session_start();
include('connection.php');

$cid=$_SESSION['c_id'];
$head=$_POST['Nhead'];
$body=$_POST['Nbody'];

$sql="INSERT INTO `notice`(`N_head`, `N_details`, `C_id`) VALUES ('$head','$body','$cid')";

$query=mysqli_query($con,$sql);

if($query){
    echo "success";
}else{
    echo "error";
}
?>