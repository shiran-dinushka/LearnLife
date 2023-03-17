<?php
include('connection.php');

$query =mysqli_query($con, "SELECT * from `messages` where `status` = 'unread' and `ToUser`='".$_SESSION['id']."' and `FromUser`='".$msg['L_Id']."'");
if(mysqli_num_rows($query)>0){
echo '<a href="?toUser='.$msg['L_Id'].'" class="list-group-item list-group-item-action list-group-item-primary" id="noti">'.$msg['Fname'].' 
<span class="badge badge-light ml-3" >'. mysqli_num_rows($query).'</span> </a>';
}
?>