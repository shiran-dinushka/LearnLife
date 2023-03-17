<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e8bc4b412b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>LearnLife  |  Courses</title>
    <style>

    

        
      
    </style>
</head>
<body>
  
    <div class="row  mx-0">
 
        <div class="col-lg-12 " style="background-color:rgba(192, 192, 192, 0.123);">
            <nav class="navbar navbar-expand-md navbar-light " >
              <a class="navbar-brand ml-5" href="../"><h1 style="font-family: 'Pattaya', sans-serif;">LearnLife</h1></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active mr-3 ">
                      <a class="nav-link " href="../">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-3">
                      <a class="nav-link " href="../#Courses">Courses</a>
                    </li>
                    <li class="nav-item active mr-3">
  
                        <?php  if(isset($_SESSION['id'])):?>
                        <a class="nav-link " href="../Dside/logout.php">Log Out<span class="sr-only">(current)</span></a>
                        <?php else :?>
                          <a class="nav-link " href="login.php">Log In<span class="sr-only">(current)</span></a>
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
  <!--image-->   
    <section style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(../pics/Free-online-courses.jpg);background-size: cover;background-repeat: no-repeat;background-position:top ;height: 400px;" class=" py-5 col-md-12">
        <div class="row  mr-0 my-5 py-5 ">
          
            <div class="col-md-12  my-5  text-light text-center" >
                <h1>Course Details</h1>
            </div>
        </div>
    </section>
    <section>
      <div class="container pt-5">
          <h1 class="text-center">Advance Web Development Course</h1>
          <div class="row mt-5 ">
           
              <img src="../pics/course2.jpg" class="col-md-5 mb-4">
          
            <div class="col-md-5 ">
              <p>Lorem ipsum dolorsit amet consecte turadip isior ipsum dolor sit ametor ipsum dolor sit amet conse</p>
            </div>
          </div>
      </div>
    </section>

    <section>
      <div class="container py-2">
        <div class="row  ">
        <div class="col-md-5 ">
    
            <a href="enroll.php"   class="btn btn-success pt-3 px-4 float-left mt-1"><h5>Enroll</h5></a>
            <button class="btn btn-danger text-light float-right px-4 pt-3 mt-1"><h5>$20</h5></button>
          </div>
        </div>
        

      </div>
    </section>

    <section class=" my-5">
      <div class="container">
        <div class="row">
          <div class="col-md-5 mb-4">
            <div class="list-group" id="list-tab" role="tablist">
              <a class="list-group-item list-group-item-action active" id="list-CourseC-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Course Content</a>
              <a class="list-group-item list-group-item-action" id="list-Sutable-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Sutable For</a>
              <a class="list-group-item list-group-item-action" id="list-Requirment-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Requirment</a>
              <a class="list-group-item list-group-item-action" id="list-Duration-list" data-toggle="list" href="#list-Duration" role="tab" aria-controls="Duration">Duration</a>
              <a class="list-group-item list-group-item-action" id="list-Lectures-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Lecturer</a>
              <a class="list-group-item list-group-item-action" id="list-Enroll-list" data-toggle="list" href="#list-Enroll" role="tab" aria-controls="settings">How Enroll</a>
            </div>
          </div>
          <div class="col-md-7">
            <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-CourseC-list">
                  <ul class="mt-4">
                    <li>SQL</li>
                    <li>PHP</li>
                    <li>AJAX</li>
                    <li>ANGULAR</li>
                    <li>Git and Git hub</li>
                  </ul>
              </div>
              <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-Sutable-list">
                <ul class="mt-5">
                  <li>The students who like to become a web developer </li>
                </ul>
              </div>
              <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-Requirment-list">
                <ul class="mt-5">
                  <li> need basic knowledge about web development </li>
                  <li>A computer </li>
                  <li>All softwares will be supply</li>
                  <li>MS Teams</li>
            
                </ul>
              </div>
              <div class="tab-pane fade" id="list-Duration" role="tabpanel" aria-labelledby="list-Duration-list">
                <ul class="mt-5">
                  <li>4 months </li>
                  <li>Tuesday and wednesday - 7.00pm to 9.30pm</li>
                </ul>
              </div>
              <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-Lectures-list">
                <div class="row ">
                  
                    <img src="../pics/teacher.jpg" style="height: 220px;max-width: 200px;" class="col-sm-3">

                 
                  <div class="col-md-6 ">
                    <h2>JOHN DIGGLE - CSE</h2>
                    Lorem ipsum dolorsit amet consecte turadip isior ipsum dolor sit ametor ipsum dolor sit amet conse
                  </div>

                </div>
                
              </div>
              <div class="tab-pane fade" id="list-Enroll" role="tabpanel" aria-labelledby="list-Enroll-list">
              
                <ul class="mt-4">
                <li>Send whatsapp message to <strong>0754934562</strong> with your email ,full name and  <strong>code as c2 </strong>then will be supply bank accout no  and pay to the course fee.
                  Then whatsapp the picture bank slip or recipt and will give entrollment id then enroll the course</li>
                </ul>

            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="footer bg-dark " id="contact">
      <div class="container pt-5">
          <div class="row">
              <div class="col-md-5 text-light">
                  <div class="logo ">
                     <h1 class="mb-4">LearnLife</h1>
                  </div>
                  <p class="text-justify w-75">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
              </div>
              <div class="col-md-4 text-light">
                  <div class="logo ">
                     <h3 class="mb-4">Contact</h3>
                  </div>
                  
                  <p><i class="fas fa-mobile mr-2"></i>0754934562</p>
                  <p><i class="fab fa-whatsapp mr-2"></i>0754934562</p>
                  <p><i class="far fa-envelope mr-2"></i></i>learnlife@gmail.com</p>
                  <p><i class="fas fa-house-user text-light mr-2"></i>xyz Road, ABC city</p> 
              </div>
              <div class="col-md-3 text-light">
                  <div class="logo">
                      <h4 class="mb-4">Follow Us on</h4>
                  </div>
                      <a href="https://facebook.com" class="text-decoration-none text-light"><p><i class="fab fa-facebook-square mr-3"></i>Facebook</p></a>
                      <a href="https://YouTube.com" class="text-decoration-none text-light"><p><i class="fab fa-youtube mr-3"></i>YouTube</p></a>
                      <a href="https://twitter.com" class="text-decoration-none text-light"><p><i class="fab fa-twitter mr-3"></i>Twitter</p></a>
                      <a href="https://linkedin.com" class="text-decoration-none text-light"><p><i class="fab fa-linkedin mr-3"></i>LinkedIn</p></a>
             
              </div>
             
          
          </div>
  
          <hr class="bg-light">
          <p class="text-center text-light mb-0">Copyright ©2021 All rights reserved</p>
      </div>
    </section>

 </body>
 <script>



                    
 </script>
 </html>