<?php
session_start();
include('connection.php');
$name=$_POST['name'];
$cid=$_SESSION['c_id'];



$target = "upload".basename($_FILES['file']['name']);

$ext = pathinfo($target,PATHINFO_EXTENSION);

if($_FILES['file']['size']> 10000000)
{
    echo 'file size too big';
   

}
else if(file_exists("../upload/".$target)){
    echo 'file is alredy uploaded';
}else if(move_uploaded_file($_FILES['file']['tmp_name'],"../upload/".$target)){
    mysqli_query($con,"INSERT INTO `uploads`(`file_name`,`path`) VALUES
    ('$name','$target')");
     
     $query2=mysqli_query($con,"SELECT `file_id` FROM `uploads` WHERE `file_name`='$name'");
     $row=mysqli_fetch_assoc($query2);
     
    $fid=$row['file_id'];
    
     mysqli_query($con,"INSERT INTO `upload_cour`( `up_id`, `c_id`) VALUES ('$fid','$cid')");
   
        echo 'success';

}

?>
