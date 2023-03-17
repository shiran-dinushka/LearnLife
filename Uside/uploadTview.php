<?php

session_start();
include("../Dside/connection.php");
if(!isset($_SESSION['Name'])){
    header('Location: login.php');
}else if( $_SESSION['Role']!='admin'){ 
    header('Location: coursedetailsSV.php');
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
    <script src="../js/courseview.js"></script>
    <title>LearnLife  |  Uploads</title>

  
</head>
<body id="body">

    <div class="row mr-0">
    <nav class=" col-md-12 bg-primary py-1 pl-5 ml-2 text-light position-fixed" id="upperbar" style=" z-index: 1071;">
            <span id="sidebarCollapse"><i class="fas fa-bars float-left fa-2x mt-2 pt-2 ml-3"></i></span>
            <h1 class="ml-5 float-left " style="font-family: 'Pattaya', sans-serif;"><a href="../" class="text-decoration-none text-light"> LearnLife</a></h1>
            <a href="../Dside/logout.php"><button class="btn btn-danger float-right mt-2"  >Log Out</button></a>
            <?php  $query =mysqli_query($con, "SELECT  `Messages`,`Time`,`FromUser` from `messages`,`std_course` where `status` = 'unread' and `ToUser`='".$_SESSION['id']."' AND std_course.L_Id=messages.FromUser AND std_course.C_id='".$_SESSION['c_id']."'");?>
            <?php if(mysqli_num_rows($query)>0){ ?>
               
                <div class="dropdown float-right mr-4 mt-2">
                <a class="btn " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class=" "> <span class="badge badge-light rounded-circle" ><?php echo mysqli_num_rows($query);?></span><i class="fas fa-bell "></i> </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <?php
                    while( $i=mysqli_fetch_assoc($query)){              
                        $query1 =mysqli_query($con, "SELECT  `Fname`, `Lname` FROM `login` WHERE `L_Id`='".$i['FromUser']."'");
                        $name=mysqli_fetch_assoc($query1);
                ?>
                    <a class="dropdown-item" href="#"><h5 style ="font-weight:bold;"><?php echo $name['Fname']." ".$name['Lname'];?></h5>
                    <small><i><?php echo date('F j, Y, g:i a',strtotime($i['Time'])) ?></i></small><br/>
                  
                </a>
                    <?php
              
                    }
                    ?>
                
                </div>
                </div>
          
               
              
           
            

            <?php }else{ ?><span class="float-right mr-4 mt-3"><i class="fas fa-bell "></i></span>
            <?php } ?>
    </nav>
      
    </div>

    <div class="vertical-nav  bg-primary " id="sidebar">
        <div class="py-4 px-3 mb-4 bg-ligh bg-info " id="user_detail">
            <div class="media d-flex align-item-center pt-4">
                <img src="../pics/userman.png" class="rounded-circle border border-dark">
            </div>
            <div class="media-body">
                <h4  class="m-0 " id="Name"><?php echo $_SESSION['Name']; ?></h4>
                <p class="font-weight-normal text-light mb-0">Instructer</p>
                <a href="setting.php" class="text-decoration-none text-muted" id="setting"><i class="fas fa-cog mr-2"></i><span>User Setting</span></a>
            </div>
        </div>


        <ul class="nav flex-column mb-5 pb-5 ">

            <li class="nav-item">
                <a class="nav-link text-light" href="coursedetailsSV.php"><i class="fas fa-list-alt mr-2 pr-1"></i><span>Course Deatils<span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link  text-light" href="uploadTview.php"><i class="fas fa-cloud-upload-alt mr-2"></i><span>Uploads</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-light" href="AssignmentsTView.php"><i class="fas fa-pen-alt mr-2"></i><span>Assignments</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link  text-light" href="noticeboard.php"><i class="fas fa-clipboard mr-2 pr-1"></i><span>Notice Board</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link  text-light" href="chatTview.php"><i class="far fa-comments mr-2"></i><span>Chat</span></a>
            </li>

            


        </ul>
        <span >
        <a href="course.php" class="text-light text-decoration-none ml-3" id="exit">  <i class="fas fa-arrow-left mr-1"></i>Return to Courses</a>
        </span>
    </div>
    <div id="page-content" class="mt-5">
        <h1 class="text-center pt-5">Upload Center</h1>

       
        <hr class="bg-warning">
        <div class="table-responsive ">
            <table class="table  table-bordered"  id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Choose File</th>
                        <th>Upload</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <form id="upload-box">
                        <td><input type="text" name="name" id="name"></td>
                        <td>  
                        
                            <div class="form-group">
                                
                            <input type="file" class="form-control-file" id="file" name="file" hidden>
                            <label for="file" id="selector">Select File</label>
                            </div>
                        
                        </td>
                        <td><button class="btn btn-warning" type="submit"><i class="fas fa-cloud-upload-alt px-4 text-light"></button></td>
                        </form>
                    </tr>

                </tbody>
            </table>
        </div>
      
  
    
        <h3 class="mt-3"> Uploads</h3>
        <hr class="bg-success">
        <div class="table-responsive ">

            <table class="table  table-bordered"  id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Date & Time</th>
                        <th>Name</th>
                        <th>Download</th>
                        <th>Delete</th>

                    </tr>
                </thead>
                <tbody id="downloadBody">
                    <tr>
                        
                        <td><input type="text"  id="Dname" disabled></td>
                        <td ><button class="btn btn-success" type="button" ><i class="fas fa-cloud-download-alt px-4 text-light"></button></td>
                    </tr>
                </tbody>
            </table>
        </div>

       

       
        
  
 




      
    
    </div>


    
</body>
<script>

var loader = function(e){
        let file= e.target.files;
        let show = "<span>Selected file : </span>"+file[0].name;

        let output =document.getElementById("selector");
        output.innerHTML =show;
        input.classList.add("active");

    };

    let fileInput =document.getElementById("file");
    fileInput.addEventListener("change",loader);


    $(document).ready(function(){
        $('#upload-box').submit(function(e){
            e.preventDefault();
        
            $.ajax({
                url:'../Dside/fileup.php',
                method:'POST',
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function(response){
                    alert(response);
                    
                }
            });
        });
    });

    $(document).ready(function(){

        $('#upload-box').click(function(e){

            var name=$('#name').val
            $.post('../Dside/fileup.php',{
                name:name
            },

            function(data,flag){
                alert(data);
            });
        });
    });



    $(document).ready(function(){
     
     $.get("../Dside/loadfiles.php",function(data,flag){
        
        
     
       
         $('#downloadBody').html(data);
      
     });



});

$(document).ready(function(){
    $('#dropdownMenuLink').click(function(){
        
        $.post('../Dside/chState.php',{
           
        },
        function(data){
            refresh();
        });
    });
});



    
   

   
</script>
</html>