<?php
session_start();


if(isset($_POST['login'])){
    $username=$_POST['email'];
    $password=$_POST['password'];
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    header('Location: ../Dside/loginCheck.php');
   
    
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>LaernLife  |  Login</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.js"></script>
        <script src="https://kit.fontawesome.com/e8bc4b412b.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    </head>
    <body class="bg-primary">

    <div style="position: relative;left: 0%;">
        <?php

            if(isset($_GET['L23'])){

                if($_GET['L23']=='pa'){
                    echo'<div class="position-fixed top-0 right-0 p-3" style="z-index: 5; right: 0; top: 0;">
                    <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2700">
                    <div class="toast-header" style="background-color: rgba(230, 24, 24, 0.774);">
                    <i class="fas fa-exclamation-circle text-danger fa-2x mr-2"></i>
                        <strong class="mr-auto" style="color:#111;">Error</strong>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="toast-body px-5 " style="background-color: rgba(255, 0, 0, 0.568);color:#111;">
                        Password Incorrect
                    </div>
                    </div>
                </div>';
                
                }else if ($_GET['L23']=='un') {
                    echo'<div class="position-fixed top-0 right-0 p-3" style="z-index: 5; right: 0; top: 0;">
                    <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2700">
                    <div class="toast-header" style="background-color: rgba(230, 24, 24, 0.774);">
                    <i class="fas fa-exclamation-circle text-danger fa-2x mr-2"></i>
                        <strong class="mr-auto" style="color:#111;">Error</strong>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="toast-body px-5 " style="background-color: rgba(255, 0, 0, 0.568);color:#111;">
                        Username  incorrect
                    </div>
                    </div>
                </div>';
                }else if ($_GET['L23']=='uap') {
                    echo'<div class="position-fixed top-0 right-0 p-3" style="z-index: 5; right: 0; top: 0;">
                    <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2700">
                    <div class="toast-header" style="background-color: rgba(230, 24, 24, 0.774);">
                    <i class="fas fa-exclamation-circle text-danger fa-2x mr-2"></i>
                        <strong class="mr-auto" style="color:#111;">Error</strong>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="toast-body px-5 " style="background-color: rgba(255, 0, 0, 0.568);color:#111;">
                        Should Enter both username password
                    </div>
                    </div>
                </div>';
                }

            }
            ?>
    </div>
    <div class="row  mx-0">
 
 <div class="col-lg-12 " style="background-color:rgba(192, 192, 192, 0.123);">
     <nav class="navbar navbar-expand-md navbar-light " >
       <a class="navbar-brand ml-5" href="../"><h1 style="font-family: 'Pattaya', sans-serif;">LearnLife</h1></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
       
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav ml-auto">
             <li class="nav-item  mr-3 ">
               <a class="nav-link " href="../">Home </a>
             </li>
             <li class="nav-item mr-3">
               <a class="nav-link " href="../#Courses">Courses</a>
             </li>
             <li class="nav-item active mr-3">
  
                 <?php  if(isset($_SESSION['id'])):?>
                            <a class="nav-link " href="Dside/logout.php">Log Out<span class="sr-only">(current)</span></a>
                        <?php else :?>
                          <a class="nav-link " href="login.php">Log In<span class="sr-only">(current)</span></a>
                          <?php endif ;?>
               </li>
               <li class="nav-item mr-3">
                 <a class="nav-link " href="register.php">Register</a>
               </li>
               <li class="nav-item mr-3">
                 <a class="nav-link " href="../#contact">Contact</a>
               </li>
              
           </ul>
           
         </div>
       </nav>
 </div>
 
</div>
       
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                            
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="../Dside/loginCheck.php" method="POST">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address" name="username">
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password">
                                            </div>
                                            <div class="form-group text-center  mt-4 mb-0">
                                               
                                                <button class="btn btn-primary py-2 px-4" name="login" type="submit">Login</button>
                                            </div>
                                           
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
          
        
    </body>
    <script>

         

            $(document).ready(function(){
                $('.toast').toast('show');
            });


           
        </script>
</html>
