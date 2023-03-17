<?php
include("../Dside/connection.php");
session_start();
if(!isset($_SESSION['Name'])){
    header('Location: login.php');
}else if( $_SESSION['Role']!='student'){ 
    header('Location: teacherView.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e8bc4b412b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/stvStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    <Script src="../js/courseview.js"></Script>
    <title>LearnLife  |  Chat</title>
</head>
<body>


    <div class="row mr-0">
    <nav class=" col-md-12 bg-primary py-1 pl-5 ml-2 text-light position-fixed" id="upperbar" style=" z-index: 1071;">
            <span id="sidebarCollapse"><i class="fas fa-bars float-left fa-2x mt-2 pt-2 ml-3"></i></span>
            <h1 class="ml-5 float-left " style="font-family: 'Pattaya', sans-serif;"><a href="../" class="text-decoration-none text-light"> LearnLife</a></h1>
            <a href="../Dside/logout.php"><button class="btn btn-danger float-right mt-2"  >Log Out</button></a>
            <?php
                $query =mysqli_query($con, "SELECT * from `messages` where `status` = 'unread' and `ToUser`='".$_SESSION['id']."'");

                if(mysqli_num_rows($query)>0){
                ?>
                <span class="float-right mr-4 mt-3"><span class="badge badge-light ml-3 rounded-circle" ><?php echo mysqli_num_rows($query); ?></span><i class="fas fa-bell "></i> </span>
                <?php }else{ ?><span  class="float-right mr-4 mt-3"><i class="fas fa-bell "></i> </span><?php }?>
    </nav>
      
    </div>

    <div class="vertical-nav  bg-primary " id="sidebar">
        <div class="py-4 px-3 mb-4 bg-ligh bg-info " id="user_detail">
            <div class="media d-flex align-item-center pt-4">
                <img src="../pics/userman.png" class="rounded-circle border border-dark">
            </div>
            <div class="media-body">
                <h4  class="m-0 "><?php echo $_SESSION['Name']?></h4>
                <p class="font-weight-normal text-light mb-0">Student</p>
                <a href="setting.php" class="text-decoration-none text-muted" id="setting"><i class="fas fa-cog mr-2"></i><span>User Setting</span></a>
            </div>
        </div>


        <ul class="nav flex-column mb-5 pb-5 " >

            <li class="nav-item">
                <a class="nav-link text-light" href="coursedetailsSV.php"><i class="fas fa-list-alt mr-2 pr-1"></i><span>Course Deatils<span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link  text-light" href="downloadSV.php"><i class="fas fa-cloud-download-alt mr-2"></i><span>Downloads</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-light" href="assignmentSV.php"><i class="fas fa-pen-alt mr-2"></i><span>Assignments</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link  text-light" href="noticeboard.php"><i class="fas fa-clipboard mr-2 pr-1"></i><span>Notice Board</span></a>
            </li>

            <li class="nav-item" >
                <a  class="nav-link  text-light" href="../Dside/chStateST.php"><i class="far fa-comments mr-2"></i><span>Chat
                <?php
                $query =mysqli_query($con, "SELECT * from `messages` where `status` = 'unread' and `ToUser`='".$_SESSION['id']."'");

                if(mysqli_num_rows($query)>0){
                ?>
                <span class="badge badge-light ml-3" ><?php echo mysqli_num_rows($query); ?></span>
                <?php } ?></span></a>
            </li>

            


        </ul>
        <span >
        <a href="course.php" class="text-light text-decoration-none ml-3" id="exit">  <i class="fas fa-arrow-left mr-1"></i>Return to Courses</a>
        </span>
    </div>
    <div id="page-content" class="mt-5">

        <div class="container" >
            
            <div class="row mr-0 justify-content-center"  id="" >

                <div class="col-md-4">
                    <p></p>
                    <input type="text" name="" id="fromUser" value="<?php echo $_SESSION['id']; ?>" hidden />

                    <p>send message to:</p>

                    <ul>
                        <?php
                            $msgs = mysqli_query($con,"SELECT * FROM login WHERE `Role`='admin' ") or die("error".mysqli_error());
                            while($msg = mysqli_fetch_assoc($msgs)){
                                echo '<a href="?toUser='.$msg['L_Id'].'" class="btn btn-dark text-light" id="selectCH"> Message to Instructor </a>';
                            }
                        ?>
                    </ul>
                </div>
                
                <div class="col-md-5" id="chat">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                               <h4>
                               <?php
                                if(isset($_GET['toUser'])){
                                    $userName= mysqli_query($con,"SELECT * FROM login WHERE `L_Id`='".$_GET['toUser']."'")
                                    or die("error".mysqli_error());
                                    $uName = mysqli_fetch_assoc($userName);
                                    echo '<input type="text" value="'.$_GET['toUser'].'" id="toUser" hidden>';
                                    echo $uName['Fname'];
                                }else{
                                    $userName= mysqli_query($con,"SELECT * FROM login ")
                                    or die("error".mysqli_error());
                                    $uName = mysqli_fetch_assoc($userName);
                                    $_SESSION['toUser']=$uName['L_Id'];
                                    echo '<input type="text" value="'.$_SESSION['toUser'].'" id="toUser" hidden/>';
                                    echo $uName['Fname'];

                                }
                               ?>
                               </h4>
                            </div>
                        
                    
                            <div class="modal-body" id="msgBody" style="height: 400px;overflow-y:scroll;overflow-x: hidden;">
                                    <?php

                                    if(isset($_GET['toUser'])){
                                        $chats= mysqli_query($con,"SELECT * From messages WHERE (FromUser = '".$_SESSION['id']."' AND
                                        ToUser= '".$_GET['toUser']."') OR (FromUser = '".$_GET['toUser']."' AND ToUser= '".$_SESSION['id']."')")
                                        or die("error".mysqli_error());
                                        $chat= mysqli_fetch_assoc($chats);
                                    }else{
                                        $chats= mysqli_query($con,"SELECT * From messages WHERE (FromUser = '".$_SESSION['id']."' AND
                                        ToUser= '".$_SESSION['toUser']."') OR (FromUser = '".$_SESSION['toUser']."' AND ToUser= '".$_SESSION['id']."')")
                                        or die("error".mysqli_error());
                                        
                                        while($chat= mysqli_fetch_assoc($chats)){
                                                if($chat['FromUser']== $_SESSION['id']){
                                                    echo "<div style='text-align:right;'>
                                                    <p style='background-color:#25D366; word-wrap:break-word;display:inline-block;
                                                    padding:5px; border-radius:10px;max-width:70%;'>
                                                    ".$chat['Messages']."<br>
                                                    <small>".$chat['Time']."</small>
                                                    </p>
                                                    </div>";
                                                }else{
                                                    echo "<div style='text-align:left;'>
                                                    <p style='background-color:#34B7F1; word-wrap:break-word;display:inline-block;
                                                    padding:5px; border-radius:10px;max-width:70%;'>
                                                    ".$chat['Messages']."<br>
                                                    <small>".$chat['Time']."</small>
                                                    </p>
                                                    </div>";
                                                }
                                        }

                                    }
                                    ?>
                            </div>
                            <div class="modal-footer">
                                        <textarea class="form-control" id="message" style="height:70px;"></textarea>
                                        <button id="send" class="btn btn-primary" style="height:70%;">Send<i class="fas fa-caret-right ml-2"></i></button>
                            </div>
                        </div>
                  
                    </div>                
                </div>
            </div>
        </div>
    
    </div>
   
</body>
<script>

$(document).ready(function(){

    $('#send').on("click",function(){
     
        $.ajax({
            url:"../Dside/insertMessage.php",
            method:"POST",
            data:{
                fromUser: $('#fromUser').val(),
                toUser: $('#toUser').val(),
                message: $('#message').val()

            },
            dateType:"text",
            success:function(data){
                $('#message').val("");
            }
            
        });
    });
});

setInterval(function() {
    $.ajax({
        url:"../Dside/realTimeChat.php",
        method:"POST",
        data:{
            fromUser:$('#fromUser').val(),
            toUser:$('#toUser').val()

        },
        dataType:"text",
        success:function(data){
            $('#msgBody').html(data);

        }
    });
    
}, 700);


$(document).ready(function(){
    setInterval(function() {
        $('#navs').load('chatSV.php');
        refresh();
    }, 5000);
   
});

  
</script>
</html>