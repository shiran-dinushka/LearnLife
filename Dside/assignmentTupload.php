<?php

session_start();

include('connection.php');
$name="c".$_SESSION['c_id'].$_POST['name'];
$cid=$_SESSION['c_id'];



$target = 'C'.$cid.basename($_FILES['file']['name']);

$ext = pathinfo($target,PATHINFO_EXTENSION);

if($_FILES['file']['size']> 10000000)
{
    echo 'file size too big';
   

}
else if(file_exists("../assignment/".$target)){
    echo 'file is alredy uploaded';
}else if(move_uploaded_file($_FILES['file']['tmp_name'],"../assignment/".$target)){
    mysqli_query($con,"INSERT INTO `AssignmentSudent`(`Name`,`path`) VALUES
    ('$name','$target')");

    
$query2=mysqli_query($con,"SELECT `id` FROM `AssignmentSudent` WHERE `Name`='$name'");
$row=mysqli_fetch_assoc($query2);

$id=$row['id'];

mysqli_query($con,"INSERT INTO `assignup_cour`( `aup_id`, `c_id`) VALUES ('$id','$cid')");

   
    echo 'success  '.$name;

}

?>