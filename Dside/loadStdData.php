<?php
session_start();
$cid=$_SESSION['c_id'];
include('connection.php');


$sqlS="SELECT  `Fname`, `Lname`, `Email`, `BirthDay` FROM `login`,`std_course` WHERE login.L_Id=std_course.L_Id AND std_course.C_id='$cid'";

$query=mysqli_query($con,$sqlS);

if(mysqli_num_rows($query)>0){
    while($arr=mysqli_fetch_assoc($query)){
        echo"
            <tr>
                <td>".$arr['Fname']."</td>
                <td>".$arr['Lname']."</td>
                <td>".$arr['Email']."</td>
                <td>".$arr['BirthDay']."</td>
            </tr>
        ";
    }
}else{
    echo '<div class="text-center">No data found</div>';
}
?>