<?php
    session_start();
  if(!isset($_SESSION['Name'])){
      header('Location: login.php');
  }
    $role=$_SESSION['Role'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnLife  |  User Setting</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.js"></script>
    <script src="https://kit.fontawesome.com/e8bc4b412b.js" crossorigin="anonymous"></script>
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
                        you are successfully Updated
                      </div>
                    </div>
                  </div>';
                 
                }else if ($_GET['1l3']=='nj34') {
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
                        Entered passwords doesn\'t match or empty  
                      </div>
                    </div>
                  </div>';
                }
                else if ($_GET['1l3']=='h23j') {
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
                        Entered password doesn\'t match
                      </div>
                    </div>
                  </div>';
                }else if ($_GET['1l3']=="7ght5") {
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
                        Feilds can\'t be empty
                      </div>
                    </div>
                  </div>';
                }else if ($_GET['1l3']=="ert232") {
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
                        Your account details doesn\'t exists
                      </div>
                    </div>
                  </div>';
                }else if ($_GET['1l3']=='i2n') {
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
       
    <div class="container bg-light mt-5 py-5 rounded">
        <div class="row">
            <div class="col-md-12 ">
                <h1 class="text-center">Account Details</h1>
            </div>
            <div class="col-md-12 mt-3">
                <form id="AccountDetails" action="../Dside/updateDetails.php" method="POST">
                    <div class="form-group">
                        <label for="Fname">First Name:</label>
                        <input type="text" class="form-control" id="Fname" name="fname">
                    </div>
                    <div class="form-group">
                        <label for="Lname">Last Name:</label>
                        <input type="text" class="form-control" id="Lname" name="lname">
                    </div>
                    <div class="form-group">
                        <label for="Email">Email address:</label>
                        <input type="email" class="form-control" id="Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Bithday:</label>
                        <input type="date" class="form-control" id="Birthday" name="birthday">
                    </div>
                    <div class="form-group">
                        <label for="password">Current Password:</label>
                        <input type="password" class="form-control" id="CurrentPass" name="cpass">
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password">New Password:</label>
                            <input type="password" class="form-control" id="NewPass" name="npass">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Retype New Password:</label>
                            <input type="password" class="form-control" id="RetypeNewPassword" name="rnpass">
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" >Update</button>

                </form>
                <div class="text-center ">
                    <?php if($role=='admin'): ?>
                        <a href="teacherView.php">     <i class="fas fa-arrow-left mr-1"></i>
                        Return to Dashboard
                    </a>
                    
                    <?php elseif($role=='student'): ?>
                        <a href="coursedetailsSV.php">  <i class="fas fa-arrow-left mr-1"></i>
                        Return to Dashboard</a>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>


         
   
</body>

<script>
    /*
    $(document).ready(function(){
        $('#AccountDetails').submit(function(){
            var Fname=$('#Fname').val();
            var Lname=$('#Lname').val();
            var Email=$('#Email').val();
            var Currentpass=$('#CurrentPass').val();
            var Npass=$('#NewPass').val();
            var RNpass=$('#RetypeNewPassword').val();
            alert(Currentpass+Npass+RNpass);
            $.post("../php/updateDetails.php",{
                fname:Fname,
                lname:Lname,
                email:Email,
                cpass:Currentpass,
                npass:Npass,
                rnpass:RNpass
            },
            
            function(data,flag){
                alert("Content: "+data+" flag "+flag);
            });
        });
    });*/


   
    $(document).ready(function(){
     
        $.get("../Dside/loadDetails.php",function(data,flag){
            var array=JSON.parse(data);
            document.getElementById('Fname').value=array['Fname'];
            document.getElementById('Lname').value=array['Lname'];
            document.getElementById('Email').value=array['Email'];
            document.getElementById('Birthday').value=array['BirthDay'];
        });



    });
    $(document).ready(function(){
                $('.toast').toast('show');
            });

</script>
</html>