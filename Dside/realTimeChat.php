<?php
include('connection.php');

$fromUser= $_POST['fromUser'];
$toUser= $_POST['toUser'];
$output='';

$chats= mysqli_query($con,"SELECT * FROM messages WHERE (FromUser='$fromUser' AND ToUser='$toUser') OR 
(FromUser='$toUser' AND ToUser='$fromUser')") or die("error".mysqli_error());

while($chat= mysqli_fetch_assoc($chats)){
            if($chat['FromUser']== $fromUser){
                $output.= "<div style='text-align:right;'>
                <p style='background-color:#25D366; word-wrap:break-word;display:inline-block;
                padding:5px; border-radius:10px;max-width:70%;' class='px-3'>
                <small><a class=\"float-left\" href=\"../Dside/insertMessage.php?l1r=".$chat['C_id']."\"><i class=\"fas fa-times\"></i></a></small>
                ".$chat['Messages']."<br>
                <small>".$chat['Time']."</small>
                </p>
                </div>";
            }else{
                $output.=  "<div style='text-align:left;'>
                <p style='background-color:#34B7F1; word-wrap:break-word;display:inline-block;
                padding:5px; border-radius:10px;max-width:70%;'>
                ".$chat['Messages']."<br>
                <small>".$chat['Time']."</small>
                </p>
                
                </div>";
            }
    

}
echo $output;
?>