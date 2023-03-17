<?php
session_start();
include('connection.php');

$stdid=$_SESSION['id'];

$sql1="SELECT  C_id,course_name FROM `course` ";

$query=mysqli_query($con,$sql1);



if(mysqli_num_rows($query)>0){
    while($arr=mysqli_fetch_assoc($query)){
       
            echo'<div class="col-md-4 ">
                    <div class="card text-white bg-info mb-3" style="max-width: 25rem;">
                        <div class="card-header"><small><a class="btn btn-success" href="../php/unenroll.php?l7sw='.$arr['C_id'].'">Unenroll</a></small></div>
                            <div class="card-body">
                            <h5 class="card-title">'.$arr['course_name'].'</h5>
                            <a class="btn btn-warning " href="../Dside/selectCourse.php?l7sw='.$arr['C_id'].'" >Go To Course<i class="fas fa-arrow-alt-circle-right text-light ml-2"></i></a>
                        </div>
                    </div>
                </div>';
        
    }
 


}else{
    echo '<div class="col-md-12 text-center"><h2>Your are not enroll any course</h2></div>';
}
?>