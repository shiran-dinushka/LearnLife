<?php
session_start();
include('connection.php');

if(isset($_SESSION['c_id'])){
$cid=$_SESSION['c_id'];

$sql="SELECT  `N_id`,`N_head`, `N_details` FROM `Notice` WHERE `C_id`='$cid' ";

$query=mysqli_query($con,$sql);

if(mysqli_num_rows($query)>0){
    while($arr=mysqli_fetch_assoc($query)){
        if($_SESSION['Role']=='admin'){
            echo "
        <tr>
            <td>
                <a class=\"btn btn-danger float-right\" href=\"../Dside/notice.php?l3r=".$arr['N_id']."\"><i class=\"fas fa-trash\" ></i></a>
                <h2>".$arr['N_head']."</h2>
                <p>".$arr['N_details']."</p>
                
            </td>
        </tr>";
        }else{
        echo "
        <tr>
            <td>
                <h2>".$arr['N_head']."</h2>
                <p>".$arr['N_details']."</p>
            </td>
        </tr>";} 
    }
}else{
    echo "
    <tr>
    <td></td>
    </tr>
    ";
}

}

if(isset($_GET['l3r'])){
    $sql="DELETE FROM `notice` WHERE `N_id`='".$_GET['l3r']."'";
    $query=mysqli_query($con,$sql);
    if($query){
        header('location: ../Uside/noticeTView.php');
    }else{
        echo 'error';
        header('location: ../Uside/noticeTView.php');
    }

}


if(isset($_GET['l1r'])){
    $sql="DELETE FROM `uploads` WHERE `file_id`='".$_GET['l1r']."'";
    $query=mysqli_query($con,$sql);
    if($query){
        header('location: ../Uside/uploadTview.php');
    }else{
        echo 'error';
        header('location: ../Uside/uploadTview.php');
    }

}


if(isset($_GET['l2r'])){
    $sql="DELETE FROM `assignmentsudent` WHERE `id`='".$_GET['l2r']."'";
    $query=mysqli_query($con,$sql);
    if($query){
        header('location: ../Uside/AssignmentsTView.php');
    }else{
        echo 'error';
        header('location: ../Uside/AssignmentsTView.php');
    }

}


?>