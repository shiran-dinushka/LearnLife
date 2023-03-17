<?php
session_start();
include('connection.php');

$role=$_SESSION['Role'];

$course=$_GET['l7sw'];

if($course=='1'){
    if($role=='admin'){ 
        $_SESSION['c_id']=$course;   
        
        header('location: ../Uside/teacherView.php');
       
    }elseif($role=='student'){
        $_SESSION['c_id']=$course;
        header('location: ../Uside/coursedetailsSV.php');
        
    }
}else if($course=='2'){
        if($role=='admin'){ 
            $_SESSION['c_id']=$course;   
            header('location: ../Uside/teacherView.php');
       
        }elseif($role=='student'){
            $_SESSION['c_id']=$course;
            header('location: ../Uside/coursedetailsSV.php');
        
    }
}else if($course=='3'){
    if($role=='admin'){ 
        $_SESSION['c_id']=$course;   
        header('location: ../Uside/teacherView.php');
   
    }elseif($role=='student'){
        $_SESSION['c_id']=$course;
        header('location: ../Uside/coursedetailsSV.php');
    }
    
}

?>