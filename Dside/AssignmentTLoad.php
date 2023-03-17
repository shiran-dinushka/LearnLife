<?php
session_start();
include 'connection.php';
$cid=$_SESSION['c_id'];
$sqlS="SELECT assigmentfinshed.id, `Name`, `date`, `path` FROM `assigmentfinshed`,`assignstd_cour` WHERE assignstd_cour.astd_id= assigmentfinshed.id  AND assignstd_cour.c_id='$cid'";
$query=mysqli_query($con,$sqlS);

if(mysqli_num_rows($query)>0){
   while($row= mysqli_fetch_array($query)){
     ?>


      <tr>
         <td><?php echo $row[2]?></td>
         <td><?php echo $row[1]?></td>
         <td><?php echo $row[3]?></td>
         <td><a href="../Dside/AssignDownload.php?file=<?php echo $row['path']?>"><button class="btn btn-success " type="button" ><i class="fas fa-cloud-download-alt px-4 text-light "></button></a></td>
      </tr>

     <?php
      
   }
  
 


}

mysqli_close($con);



?>