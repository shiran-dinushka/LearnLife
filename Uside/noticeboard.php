<?php
session_start();
include('../Dside/connection.php');
if(!isset($_SESSION['Name'])){
    header('Location: login.php');
}else if( $_SESSION['Role']!='student'){ 
    header('Location: teacherView.php');
}?>
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
    <title>LearnLife  |  Noticeboard</title>
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
                <h4  class="m-0 " id="Name">Shiran</h4>
                <p class="font-weight-normal text-light mb-0">Student</p>
                <a href="setting.php" class="text-decoration-none text-muted" id="setting"><i class="fas fa-cog mr-2"></i><span>User Setting</span></a>
            </div>
        </div>


        <ul class="nav flex-column mb-5 pb-5 ">

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

            <li class="nav-item">
                <a class="nav-link  text-light" href="../Dside/chStateST.php"><i class="far fa-comments mr-2"></i><span>Chat
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
    <div id="page-content" class="mt-5 pt-5">

     
    <div class="container">   
                <div class="table-responsive ">
                
                    <div class="card mb-4 ">
                        <div class="card-header">
                        <h2 class="text-center"><span class="float-left"><i class="fas fa-table mr-1  "></i></span>Noticeboard</h2>
                        </div>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <tbody id="notice">
                                    <tr>
                                    </tr>
                                </tbody>
                            </table>

                    </div>
           
       
                </div>
    </div>


    
</body>
<script>
       
     $(document).ready(function(){
       
       $.get("../Dside/notice.php",function(data,flag){
            $('#notice').html(data);
           
    
       });

  });
  
</script>
</html>