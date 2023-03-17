<?php

session_start();
include('../Dside/connection.php');
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <link rel="stylesheet" href="../css/stvStyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="../files/PIECHART/plugins/jquery.easypiechart.min.js"></script>
    <Script src="../js/courseview.js"></Script>
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    <title>LearnLife  |  LMS </title>

  
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
                <h4  class="m-0 " id="Name"><?php echo $_SESSION['Name']; ?></h4>
                <p class="font-weight-normal text-light mb-0" >Student</p>
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
    <div id="page-content">
       
        <section id="course-lessons" class="mt-5">
            <div class="container-fluid ">
                <div class="row mr-0 ">
                    <div class="col-md-3 bg-danger pb-2 py-3 ml-4 mt-5" id="noChap">
                        <span class="float-left mt-2 mr-4 pr-2"><i class="fas fa-file-alt fa-5x text-light"></i></span>
                        <span class="float-right">
                            <h4 class=" text-light mt-2">Lessons</h4> 
                            <h3 class="ml-1 text-light" id="NOL">0</h3>
                        </span>
                    </div>
                    <div class="col-md-3 bg-success pb-2 py-3 ml-4 mt-5" id="noChap">
                        <span class="float-left mt-2"><i class="fas fa-clock fa-5x text-light "></i></span>
                        <span class="float-right">
                            <h4 class=" text-light mt-2" >Duration</h4> 
                            <h3 class="ml-1 text-light" id="NOD">0 H</h3>
                        </span>
                    </div>
                
                    <div class="col-md-3 bg-dark pb-2 py-3 ml-4 mt-5" id="noChap">
                        <span class="float-left mt-2 mr-3 pr-1"><i class="fas fa-tasks fa-5x text-light"></i></span>
                        <span class="float-right">
                            <h4 class=" text-light mt-2" >Project</h4> 
                            <h3 class="ml-1 text-light" id="NOP">0</h3>
                        </span>
                    </div>
                    
                   
                </div>
            </div>
  
 
        </section>

        <section class="mt-5">
            
                <div class="container-fluid" id="progressbars">
                    <div class="row mr-0 " >
                        
                     
                          
                        
                    </div>
                  
                </div>
           
        </section>
        
    
    </div>


    
</body>
<script>
     $(document).ready(function(){
       $('#edit1').click(function(){
            $('#valueAdd1').show();
       });
   });

   $(document).ready(function(){
       $('#Add1').click(function(){
        var value=$('#Lvalue').val();
        $.post("../Dside/course.php" ,{
                name:'Lessons',
                value:value
            },
            
            function(data,flag){
                alert("Content: "+data+" flag "+flag);
                document.getElementById('NOL').innerHTML=data;
                $('#valueAdd1').hide();
            });     
       });
     
   });
   $(document).ready(function(){
       $('#edit2').click(function(){
        $('#valueAdd2').show();
       });
   });

   $(document).ready(function(){
       $('#Add2').click(function(){
       
        var value=$('#Dvalue').val();
        $.post("../Dside/course.php" ,{
                name:'Duration',
                value:value
            },
            
            function(data,flag){
                alert("Content: "+data+" flag "+flag);
                document.getElementById('NOD').innerHTML=data+" H";
                $('#valueAdd2').hide();
            });     
       });
     
   });
   $(document).ready(function(){
       $('#edit3').click(function(){
        $('#valueAdd3').show();
       });
   });

   $(document).ready(function(){
        $('#Add3').click(function(){
        
            var value=$('#Pvalue').val();
            $.post("../Dside/course.php" ,{
                    name:'Project',
                    value:value
                },
                
                function(data,flag){
                    alert("Content: "+data+" flag "+flag);
                    document.getElementById('NOP').innerHTML=data;
                    $('#valueAdd3').hide();
            });     
       });
     
   });

   $(document).ready(function(){
     
        $.get("../Dside/loadCourse.php",function(data,flag){
            var array= JSON.parse(data);
            document.getElementById('NOL').innerHTML=array['no_lessons'];
            document.getElementById('NOD').innerHTML=array['durations']+" H";
            document.getElementById('NOP').innerHTML=array['no_projects'];
        });

 

   });

   $(document).ready(function(){
       
       $.get("../Dside/lesson_status.php",function(data,flag){
            $('#progressbars').html('<div class="row mr-0 " >'+data+'</div>');
            $(function(){
        $('.chart').easyPieChart({
            size:150,
            barColor:'#17c2a4',
            scaleColor:false,
            lineWidth:10,
            trackColor:'#ecf0f1',
            lineCap:'circle',
            animate:1700

        });
    });
    
       });

  });



</script>


</html>