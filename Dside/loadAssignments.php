<?php
session_start();
$cid=$_SESSION['c_id'];

include 'connection.php';

$sqlS="SELECT assignmentsudent.id, `Name`, `date`, `path` FROM `assignmentsudent`,`assignup_cour` WHERE assignup_cour.aup_id = assignmentsudent.id  AND assignup_cour.c_id='$cid' ";
$query=mysqli_query($con,$sqlS);

if(mysqli_num_rows($query)>0){
   while($row= mysqli_fetch_array($query)){
         if($_SESSION['Role']=='admin'){
      ?>


      <tr>
         <td><?php echo $row[2]?></td>
         <td><?php echo $row[1]?></td>
         <td><a href="../Dside/AssignDownload.php?file=<?php echo $row[3]?>"><button class="btn btn-success " type="button" ><i class="fas fa-cloud-download-alt px-4 text-light "></button></a></td>
         <td><a class="btn btn-danger " href="../Dside/notice.php?l2r=<?php echo $row[0]?>"><i class="fas fa-trash" ></i></a></td>
      </tr>

     <?php
         }else{
            ?>
               <tr>
                  <td><?php echo $row[2]?></td>
                  <td><?php echo $row[1]?></td>
                  <td><a href="../Dside/AssignDownload.php?file=<?php echo $row[3]?>"><button class="btn btn-success " type="button" ><i class="fas fa-cloud-download-alt px-4 text-light "></button></a></td>
               </tr>

            <?php
            
            
            
            
           
         }
      
   }
  
 


}

mysqli_close($con);



?>