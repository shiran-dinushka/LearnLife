<?php
session_start();
$role=$_SESSION['Role'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnLife  |  Enrolled Courses</title>
    <script src="https://kit.fontawesome.com/e8bc4b412b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
</head>
<body style="background-color: rgba(139, 138, 138, 0.466);">
     <!--header-->   
    <div class="row  mx-0" >
 
            <div class="col-lg-12 bg-light" style="background-color:rgba(192, 192, 192, 0.123);">
                <nav class="navbar navbar-expand-md navbar-light " >
                    <a class="navbar-brand ml-5" href="../"><h1 style="font-family: 'Pattaya', sans-serif;">LearnLife</h1></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active mr-3 ">
                            <a class="nav-link " href="../">Home </a>
                            </li>
                            <li class="nav-item mr-3">
                            <a class="nav-link " href="../#Courses">Courses</a>
                            </li>
                            <li class="nav-item mr-3">
                            <?php  if(isset($_SESSION['id'])):?>
                                <a class="nav-link " href="../Dside/logout.php">Log Out</a>
                                <?php else :?>
                                <a class="nav-link " href="../Uside/login.php">Log In</a>
                            <?php endif ;?>
                            </li>
                            <?php  if(!isset($_SESSION['id'])):?>
                          <li class="nav-item mr-3"><a class="nav-link " href="register.php">Register</a> </li>
                            <?php endif ;?>
                       
                            <li class="nav-item mr-3">
                                <a class="nav-link " href="../#contact">Contact</a>
                            </li>
                            <li class="nav-item mr-3">
                                <a class="nav-link " href="#">About</a>
                            </li>
                        </ul>
                    
                    </div>
                </nav>
            </div>
 
    </div>

    <div class="container-fluid mt-5 " >
        <?php if($_SESSION['Role']=='student'):?>
            <h1 class="ml-5 ">I'm Learning</h1>
            <h4 class="ml-5 my-5">Courses I've Enrolled In</h4>
        <?php else:?>
            <h1 class="ml-5 ">I'm Teaching</h1>
            <h4 class="ml-5 my-5"></h4>
        <?php endif;?>
        
       <div class="container pb-5">
           <div class="row " id="Enrcourse">
             
             
           </div>
       </div>
    </div>



    
</body>
<script>
        role='<?php echo $role;?>';
        if(role=='admin'){
            $link='allCourse.php';
            $(document).ready(function(){
            $.get('../Dside/allCourse.php',function(data,flag){

                document.getElementById('Enrcourse').innerHTML=data;
            });
        });
        }else{
            $link='entrolledCour.php';
            $(document).ready(function(){
            $.get('../Dside/entrolledCour.php',function(data,flag){

                document.getElementById('Enrcourse').innerHTML=data;
            });
        });
        }

      


    
    </script>
</html>