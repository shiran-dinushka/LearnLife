<?php
session_start();
include 'connection.php';
$cid=$_SESSION['c_id'];

$sqlS="SELECT uploads.file_id, `file_name`, `date`, `path` FROM `uploads`,`upload_cour` WHERE upload_cour.up_id= uploads.file_id  AND upload_cour.c_id='$cid'";
$query=mysqli_query($con,$sqlS);

if(mysqli_num_rows($query)>0){
   while($row= mysqli_fetch_array($query)){
      if($_SESSION['Role']=='admin'){
     ?>


      <tr>
         <td><?php echo $row[2]?></td>
         <td><?php echo $row[1]?></td>
         <td><a href="../Dside/download.php?file=<?php echo $row[3]?>"><button class="btn btn-success " type="button" ><i class="fas fa-cloud-download-alt px-4 text-light "></button></a></td>
         <td><a class="btn btn-danger " href="../Dside/notice.php?l1r=<?php echo $row[0]?>"><i class="fas fa-trash" ></i></a></td>
      </tr>

     <?php
      }else{

         ?>
          <tr>
         <td><?php echo $row[2]?></td>
         <td><?php echo $row[1]?></td>
         <td><a href="../Dside/download.php?file=<?php echo $row[3]?>"><button class="btn btn-success " type="button" ><i class="fas fa-cloud-download-alt px-4 text-light "></button></a></td>
      </tr>
         <?php
      }
   }
  
 


}

mysqli_close($con);



?>