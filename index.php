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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/Counter-Up-master/jquery.counterup.min.js"></script>
    <script src="js/imakewebthings-waypoints-34d9f6d/lib/jquery.waypoints.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
   
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>LearnLife</title>
    <style>

  

        img{
          position: relative;
        }

        #price-plan{
          position: absolute;
          top:0;
          right:10px;
          background-color: rgba(255, 77, 71, 0.959);
          padding:5px;
          color: #fff;
          font-size: 20px;
          transform: translate(1,1);
          box-shadow: -8px 7px 17px -7px rgba(0,0,0,0.93);
         
        }

    
    

        
      
    </style>
</head>
<body >  


  
    <div class="row  mx-0">
 
        <div class="col-lg-12 " style="background-color:rgba(192, 192, 192, 0.123);">
            <nav class="navbar navbar-expand-md navbar-light " >
              <a class="navbar-brand ml-5" href=" "><h1 style="font-family: 'Pattaya', sans-serif;">LearnLife</h1></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active mr-3 ">
                      <a class="nav-link " href=" ">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-3">
                      <a class="nav-link " href="#Courses">Courses</a>
                    </li>
                    <li class="nav-item mr-3">
                        <?php  if(isset($_SESSION['id'])):?>
                            <a class="nav-link " href="Dside/logout.php">Log Out</a>
                        <?php else :?>
                          <a class="nav-link " href="Uside/login.php">Log In</a>
                          <?php endif ;?>
                      </li>
                      <?php  if(!isset($_SESSION['id'])):?>
                          <li class="nav-item mr-3"><a class="nav-link " href="Uside/register.php">Register</a> </li>
                    <?php endif ;?>
                       
                      <li class="nav-item mr-3">
                        <a class="nav-link " href="#contact">Contact</a>
                      </li>
                      <?php  if(isset($_SESSION['id'])):?>
                        <li class="nav-item mr-3">
                            <a class="nav-link " href="Uside/Course.php">Your Courses</a>
                          </li>
                      <?php endif ;?>
                    
                  </ul>
                  
                </div>
              </nav>
        </div>
        
    </div>
  <!--image-->   
    <section style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(pics/bgimg.jpg);background-size: cover;background-repeat: no-repeat;background-position:top ;" class=" py-5 col-md-12">
        <div class="row  mr-0 my-5 py-5 ">
          <div class="col-md-1   text-light" ></div>
            <div class="col-md-5  my-5  text-light" >
                
                <h1 class="animate__animated animate__bounceIn">We provide best online courses</h1>
                <p class="animate__animated animate__bounceIn">We always provide our best educational services for our all students and always try to achieve our students trust and satisfaction</p>
                <a class="btn btn-info  rounded-pill mt-4 pt-3 pb-2 px-5 animate__animated animate__backInLeft" href="Uside/register.php"><h4 class="text-light">Register Free</h4></a>
            </div>
        </div>
    </section>

  <!--cards-->

  <div class="container justify-content-center my-5">
    <div class="row ">
        <div class="col-md-4 text-center animate__animated animate__backInLeft">
          
   
            <span>
              <img src="pics/LMS.png"  style="width: 250px;">
            </span>
            <span >
              <h4 >Online Course Facilities</h4>
            </span>      
             
      </div>
            
          
          
     
        <div class="col-md-4  text-center animate__animated animate__backInLeft">
          <img src="pics/19469aed7f222d6009f48158a682bb9c.png" style="width: 180px;">
          <span >
            <h4 >Well Experienced Lectures</h4>
          </span> 
         
        </div>
        <div class="col-md-4  text-center animate__animated animate__backInLeft">
          <img src="pics/certificate.png" style="width: 180px;">
          <span >
            <h4 >Online certificates issue</h4>
          </span> 
        </div>
    </div>
  </div>

  <!---->
  <section style="background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(pics/PISA-Volume-VI-blog.jpg);background-attachment:fixed;" >
    <div class="container  ">
      <div class="row py-5 text-light " style="text-transform:uppercase ;">
        <div class="col-md-4 text-center my-5">
          <i class="fas fa-user-friends fa-4x  mb-4"></i>
          <h1 class="counter">200</h1>
          <h4>Students</h4>
        </div>
        <div class="col-md-4 text-center my-5">
          <i class="fas fa-chalkboard-teacher fa-4x  mb-4"></i>
          <h1 class="counter">10</h1>
          <h4>Lectures</h4>
        </div>
        <div class="col-md-4 text-center my-5">
          <i class="fas fa-laptop-code fa-4x  mb-4"></i>
          <h1 class="counter">5</h1>
          <h4>Courses</h4>
        </div>
      </div>
        
    </div>
  </section>

  <section style="background-color: rgba(169, 169, 169, 0.308);" id="Courses">
    <h1 class="text-center pt-5">OUR COURSES</h1>
    <div class="container py-5">
      <div class="owl-carousel owl-theme text-center">
      
        <div class="item" id="item">
          <div class="card " >
            
            <img src="pics/course1jpg.jpg" class="card-img-top" style="height: 200px;">
            <div class="card-body">
              <div id="price-plan">$10</div>
              <h4 class="text-left"><a href="Uside/course1.php" class="text-decoration-none text-dark" id="link">Basic Web Design</a></h4>
              <span class="float-left">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="fas fa-star-half-alt"></i>
              </span><br>
              <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
              
            </div>

          </div>
        </div>
        <div class="item" id="item">
          <div class="card " >
            <img src="pics/course2.jpg" class="card-img-top" style="height: 200px;">
            <div class="card-body">
              <div id="price-plan">$20</div>
              <h4 class="text-left"><a href="Uside/course2.php" class="text-decoration-none text-dark" id="link">Advance Web Design</a></h4>
              <span class="float-left">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="fas fa-star-half-alt"></i>
              </span><br>
              <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
              
            </div>
          </div>
        </div>
        <div class="item" id="item">
          <div class="card" >
            <img src="pics/cour3.png" class="card-img-top" style="height: 200px;">
            <div class="card-body">
              <div id="price-plan">$25</div>
              <h4 class="text-left"><a href="Uside/course3.php" class="text-decoration-none text-dark" id="link">Python</a></h4>
              <span class="float-left">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </span><br>
              <p class="card-text text-justify" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
              
            </div>
          </div>
        </div>
        <div class="item" id="item">
          <div class="card " >
            <img src="pics/course1jpg.jpg" class="card-img-top" style="height: 200px;">
            <div class="card-body">
              <div id="price-plan">$10</div>
              <h4 class="text-left"><a href="Uside/course1.php" class="text-decoration-none text-dark" id="link">Basic Web Design</a></h4>
              <span class="float-left">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="fas fa-star-half-alt"></i>
              </span><br>
              <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
              
            </div>
          </div>
        </div>
        <div class="item" id="item">
          <div class="card " >
            <img src="pics/course2.jpg" class="card-img-top" style="height: 200px;">
            <div class="card-body">
              <div id="price-plan">$20</div>
              <h4 class="text-left"><a href="Uside/course2.php" class="text-decoration-none text-dark" id="link">Advance Web Design</a></h4>
              <span class="float-left">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </span><br>
              <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
              
            </div>

          </div>
        </div>
        <div class="item" id="item">
          <div class="card" >
            <img src="pics/cour3.png" class="card-img-top" style="height: 200px;">
            <div class="card-body">
              <div id="price-plan">$25</div>
              <h4 class="text-left"><a href="Uside/course3.php" class="text-decoration-none text-dark" id="link">Python</a></h4>
              <span class="float-left">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </span><br>
              <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
              
            </div>
          </div>
        </div>
        
 
      </div>
    
    </div>
  </section>


  <section style="background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(pics/PISA-Volume-VI-blog.jpg);background-attachment:fixed;">
    <h1 class="text-center pt-5 text-light">HAPPY STUDENTS</h1>
    <div class="container ">
        <div class="owl-carousel mt-5 text-light " id="slider">
              
                  <div class="contetnt-area" >
                  
                    <div class="contetnt ml-3" >

                      <div><img src="pics/1.jpg"  class="rounded-circle" style="width: 100px;float: left;border: 5px solid whitesmoke;"></div>
                      <span style="float: right;">
                      <h5 class="mt-5" style="color: rgb(236, 141, 236);">Catherin Grace</h5> 
                      <small style="color: rgb(170, 117, 231);">University of SLIIT</small>
                      <p class="mt-2">Lorem ipsum dolor sit amet, consecte turadipie sicing elit. Quas voluptatem maiores eaques Quasvolu ptatem maiores
                      </p>

                      </span>
                            
                           
   
                    </div>
                  </div>
                  <div class="contetnt-area">
                  
                    <div class="contetnt">

                      <div><img src="pics/2.jpg"  class="rounded-circle" style="width: 100px;float: left;border: 5px solid whitesmoke;"></div>
                      <span style="float: right;">
                      <h5 class="mt-5" style="color: rgb(236, 141, 236);">Pravel Sharma</h5> 
                      <small class="mb-3" style="color: rgb(170, 117, 231);">University of SLIIT</small>
                      <p class="mt-2">Lorem ipsum dolor sit amet, consecte turadipie sicing elit. Quas voluptatem maiores eaques Quasvolu ptatem maiores
                      </p>
                      </span>
                           
   
                    </div>
                  </div>
                  <div class="contetnt-area">
                  
                    <div class="contetnt">

                      <div><img src="pics/1.jpg"  class="rounded-circle" style="width: 100px;float: left;border: 5px solid whitesmoke;"></div>
                      <span style="float: right;">
                        <h5 class="mt-5" style="color: rgb(236, 141, 236);">Catherin Grace</h5> 
                        <small class="mb-3" style="color: rgb(170, 117, 231);">University of SLIIT</small>
                      <p class="mt-2"class="mt-2">Lorem ipsum dolor sit amet, consecte turadipie sicing elit.Quas voluptatem maiores eaques Quasvolu ptatem maiores
                      </p>
                      </span>
                           
   
                    </div>
                  </div>
                  <div class="contetnt-area">
                  
                    <div class="contetnt">

                      <div><img src="pics/3.jpg"  class="rounded-circle" style="width: 100px;float: left;border: 5px solid whitesmoke;"></div>
                      <span style="float: right;">
                        <h5 class="mt-5" style="color: rgb(236, 141, 236);">Catherin Grace</h5> 
                        <small class="mb-3" style="color: rgb(170, 117, 231);">University of SLIIT</small> 
                      <p class="mt-2">Lorem ipsum dolor sit amet, consecte turadipie sicing elit. Quas voluptatem maiores eaques Quasvolu ptatem maiores
                      </p>
                      </span>
                           
   
                    </div>
                  </div>
                  <div class="contetnt-area">
                  
                    <div class="contetnt">

                      <div><img src="pics/1.jpg"  class="rounded-circle" style="width: 100px;float: left;border: 5px solid whitesmoke;"></div>
                      <span style="float: right;">
                        <h5 class="mt-5" style="color: rgb(236, 141, 236);">Catherin Grace</h5> 
                        <small class="mb-3" style="color: rgb(170, 117, 231);">University of SLIIT</small>
                      <p class="mt-2">Lorem ipsum dolor sit amet, consecte turadipie sicing elit. Quas voluptatem maiores eaques Quasvolu ptatem maiores
                      </p>
                      </span>
                           
   
                    </div>
                  </div>
                  <div class="contetnt-area">
                  
                    <div class="contetnt">

                            <div><img src="pics/2.jpg"  class="rounded-circle" style="width: 100px;float: left;border: 5px solid whitesmoke;"></div>
                            <span style="float: right;">
                            <h5 class="mt-5" style="color: rgb(236, 141, 236);">Pravel Sharma</h5> 
                            <small class="mb-3" style="color: rgb(170, 117, 231);">University of SLIIT</small>
                            <p class="mt-2">Lorem ipsum dolor sit amet, consecte turadipie sicing elit. Quas voluptatem maiores eaques Quasvolu ptatem maiores
                            </p>
                            </span>
                          
   
                    </div>
                  </div>
                           
                 
        </div>
      </div>
  </section>   

  <section >
    <div >
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.63162573187!2d79.78616472231474!3d6.921833528299202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1621850397110
      !5m2!1sen!2slk"  height="500" style="border:0;" allowfullscreen="" loading="lazy" class="col-md-12 px-0 mx-0"></iframe>
    </div>

     
     

   </section>

  <section class="footer bg-dark " id="contact">
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-5 text-light">
                <div class="logo ">
                   <h1 class="mb-4" style="font-family: 'Pattaya', sans-serif;font-size:50px;">LearnLife</h1>
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


  function intiMap(){
    var location = {lat: -25.363,lng: 131.004};
    var map = new google.maps.Map(document.getElementById("map"),{
      Zoom: 4,
      center: location
    });

  }



$('#slider').owlCarousel({
    loop:true,
    margin:15,
    nav:false,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        700:{
            items:2
        },
        1100:{
            items:3
        }
    }
})

 $('.counter').counterUp({
    delay: 10,
    time: 400
  });


 

</script>
</html>