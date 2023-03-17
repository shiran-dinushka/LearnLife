<?php
session_start();
include 'connection.php';
$id=$_SESSION['c_id'];

$sqlS="SELECT  `no_lessons`, `durations`,`no_projects` FROM `course` WHERE C_id='$id' ";
$query=mysqli_query($con,$sqlS);

if(mysqli_num_rows($query)==1){
      $array= mysqli_fetch_assoc($query);
      $arr= json_encode($array);
      echo $arr;
      
   }else{
      echo 'error';
   }
  
 



mysqli_close($con);



?>
