<?php
session_start();
include('connection.php');
$cid=$_SESSION['c_id'];
$table="Course_".$cid;

$sql="SELECT `lesson_name`, `precentage` FROM `$table`";

$query=mysqli_query($con,$sql);
$out="";

if(mysqli_num_rows($query)>0){
    while($arr=mysqli_fetch_assoc($query)){
        echo'<div class="col-lg-2 mt-5 ml-4 mr-5">
                          
                <div class="box text-center mt-5 pt-1 " id="chart">
                    <div class="chart" data-percent="'.$arr['precentage'].'" data-bar-color="#ff4241" >
                        <h2 class="percent  mt-1" >'.$arr['precentage'].'%</h2>
                    </div>
                    <p class="text-center">'.$arr['lesson_name'].'</p>
                </div>
 

            </div>';
    }
     
}
?>