<?php
session_start();
if(!isset(($_SESSION['Name']))){
    header('Location: login.php');
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
        <title>LearnLife  |  Enrollment</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.js"></script>
        <script src="https://kit.fontawesome.com/e8bc4b412b.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
        <style >
             
                

        </style>
</head>
    <body class="bg-primary">

        <div style="position: relative;left: 0%;">
            
            <?php

            if(isset($_GET['1l3'])){

                if($_GET['1l3']=='w3e'){
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
                      Registration code is invalid
                    </div>
                  </div>
                </div>';
                 
                }else if ($_GET['1l3']=='we7') {
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
                        Emali is invalid 
                      </div>
                    </div>
                  </div>';
                }
                else if ($_GET['1l3']=='e8w') {
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
                        your name is invalid
                      </div>
                    </div>
                  </div>';
                
                }else if ($_GET['1l3']=='7o8') {
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
        <div id="layoutAuthentication" class="mt-5">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-3">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Enroll Course</h3></div>
                                    <div class="card-body">
                                        <form id="reg-form"  method="POST" action="../Dside/checkReg.php">
                                            <div class="form-row" >
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="fName">First Name</label>
                                                        <input class="form-control py-4" id="fName" type="text" placeholder="Enter first name" name="fname"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="lName">Last Name</label>
                                                        <input class="form-control py-4" id="lName" type="text" placeholder="Enter last name" name="lname"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="email">Email</label>
                                                <input class="form-control py-4" id="email" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="Email"/>
                                            </div>
                                            <div class="form-group">
                                                  <label for="Registration" class="small mb-1">Registration Code</label>
                                                  <input type="text" class="form-control" id="Registration" name="Registration" placeholder="Registration Cod" >
                                            </div>
                                            
                                            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" id="createac" name="submit" type="submit" >Enroll</button></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
          </div>
           

    

      
    
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script>

         

            $(document).ready(function(){
                $('.toast').toast('show');
            });


           
        </script>
    </body>
</html>
