<?php
session_start();
include('connection.php');
$sid=$_SESSION['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['Email'];
$code=$_POST['Registration'];
$cid=$code[1];

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($code)&& !empty($cid)){

    $sql="SELECT `FName`, `LName`, `Email` FROM `courseReg` WHERE `RegCode`='$code'";
    $query=mysqli_query($con,$sql);

    if(mysqli_num_rows($query)>0){
        $arr=mysqli_fetch_assoc($query);
        if($arr['FName']==$fname && $arr['LName']==$lname){
            if($arr['Email']==$email){
                
                    $sqlI="INSERT INTO `std_course` (`L_Id`, `C_id`) VALUES ('$sid','$cid')";
                    $query1=mysqli_query($con,$sqlI);
                    if($query1){
                        header('location: ../Uside/course.php');
                    }else{
                        header('location: ../Uside/enroll.php?1l3=7o8');
                   }       
            }
            else{
                header('location: ../Uside/enroll.php?1l3=we7');
            }
        }else{
            header('location: ../Uside/enroll.php?1l3=e8w');
        }
    }else{
        header('location: ../Uside/enroll.php?1l3=w3e');
    }
}else{
    header('location: ../Uside/enroll.php?1l3=w2qx');
}
?>