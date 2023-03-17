<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>LearnLife  |  Registration</title>
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

            if(isset($_GET['1l3'])){

                if($_GET['1l3']=='7o8'){
                    echo'<div class="position-fixed top-0 right-0 p-3" style="z-index: 5; right: 0; top: 0;">
                    <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2700">
                      <div class="toast-header" style="background-color: rgba(37, 175, 37, 0.788);">
                        <i class="far fa-check-circle text-success mr-2 fa-2x"></i>
                        <strong class="mr-auto" style="color:#111;">Success</strong>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="toast-body px-5 " style="background-color: rgba(108, 240, 108, 0.788);color:#111;">
                        you are successfully registered
                      </div>
                    </div>
                  </div>';
                 
                }else if ($_GET['1l3']=='n3f7l4') {
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
                        All are required to fill
                      </div>
                    </div>
                  </div>';
                }
                else if ($_GET['1l3']=='l7d') {
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
                        Email is already exists
                      </div>
                    </div>
                  </div>';
                }else if ($_GET['1l3']=="p78swrdoeQ45h") {
                    echo'<div class="position-fixed top-0 right-0 p-3" style="z-index: 5; right: 0; top: 0;">
                    <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2700">
                      <div class="toast-header " style="background-color: rgba(230, 24, 24, 0.774)";>
                        <i class="fas fa-exclamation-circle text-danger fa-2x mr-2"></i>
                        <strong class="mr-auto" style="color:#111;">Error</strong>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="toast-body px-5 " style="background-color: rgba(255, 0, 0, 0.568);color:#111;">
                        your passwords doesn\'t match
                      </div>
                    </div>
                  </div>';
                }else if ($_GET['1l3']=='ro178l') {
                    echo'<div class="position-fixed top-0 right-0 p-3" style="z-index: 5; right: 0; top: 0;">
                    <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2700">
                      <div class="toast-header" style="background-color: rgba(233, 193, 14, 0.87);">
                        <i class="fas fa-exclamation-triangle fa-2x mr-2 text-warning"></i>
                        <strong class="mr-auto" style="color:#111;">Warning</strong>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="toast-body px-5 " style="background-color: rgba(243, 209, 57, 0.685);color:#111;">
                        Database doesn\'t work correctly
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
                        <li class="nav-item mr-3 ">
                          <a class="nav-link " href="../">Home </a>
                        </li>
                        <li class="nav-item mr-3">
                          <a class="nav-link " href="../#Courses">Courses</a>
                        </li>
                        <li class="nav-item mr-3">
                            <?php  if(isset($_SESSION['id'])):?>
                                <a class="nav-link " href="Dside/logout.php">Log Out</a>
                            <?php else :?>
                              <a class="nav-link " href="login.php">Log In</a>
                              <?php endif ;?>
                          </li>
                          <li class="nav-item active mr-3">
                            <a class="nav-link " href="register.php">Register<span class="sr-only">(current)</span></a>
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
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-3">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form id="reg-form"  method="POST" action="../Dside/register.php">
                                            <div class="form-row" >
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">First Name</label>
                                                        <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter first name" name="fname"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Last Name</label>
                                                        <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter last name" name="lname"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="Email"/>
                                            </div>
                                            <div class="form-group">
                                                  <label for="password" class="small mb-1">Bithday</label>
                                                  <input type="date" class="form-control" id="Birthday" name="birthday" >
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Password</label>
                                                        <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="Pass"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                                        <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" name="confPass"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" id="createac" name="submit" type="submit">Create Account</button></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="../php/login.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

            

      
    
        
           <script>

         

            $(document).ready(function(){
                $('.toast').toast('show');
            });


           
        </script>
    </body>
</html>
