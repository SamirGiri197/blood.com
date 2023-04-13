<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
      

      <link rel="stylesheet" type="text/css" href="static/fontawesome/css/all.min.css">
      <link rel="stylesheet" type="text/css" href="static/styles/home.css">
      <link rel="shortcut icon" href="assets/logos/icon.png" type="image/png"/>

      <script src="static/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="static/fontawesome/js/all.min.js"></script>

      <link rel="stylesheet" type="text/css" href="fonts/icomoon/style.css">
      <link rel="stylesheet" type="text/css" href="static/styles/owl.carousel.min.css">
      <link rel="stylesheet" type="text/css" href="static/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="static/styles/style.css">

   
      
      <title>Blood | Online Blood Management System</title>

      

   </head>
   <body>
      <div class="container-fluid d-flex align-items-center justify-content-center">
         <div class="col-12 col-md-12 col-sm-12">
            <div class="row">
               <!-- logo and slogan -->
               <div class="d-flex align-items-center col-12 col-md-8 col-sm-12 py-2">
                  <div class="col-md-2 col-sm-2 mt-2 mb-2 px-4">
                     <a class="navbar-brand" href="/workspace/blood.com"><img src="assets/logos/logo.png" height="80" width="90" alt="Logo"></a>
                  </div>
                  <div class="col-md-4 col-sm-4 d-flex align-items-start">
                     <h1>
                        <span class="slogan-word">Blood</span>
                        <span class="slogan-word">For</span>
                        <span class="slogan-word">Life</span>
                     </h1>  
                  </div>
                  <div class="col-md-10 col-sm-4">

                  </div>
                  <div class="col-md-2 col-sm-2">
                     <a role="button" class="btn btn-dark form-control" id="request-blood" href="/workspace/blood.com/request-blood">Request Blood</a>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <nav class="navbar navbar-expand-md navbar-light sticky-top" id="navbar">
         <div class="container-fluid">

            <div class="navbar-brand  d-flex align-items-center logo-center-sm d-md-none d-lg-none">
               <a class="navbar-brand" href="/workspace/blood.com">
                  <i class="fas fa-home"></i>
               </a>
            </div>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center justify-content-end" id="navbarSupportedContent">
               <ul class="navbar-nav  mb-2  mb-lg-0">
               <li class="nav-item">
                     <a class="nav-link" href="/workspace/blood.com">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/workspace/blood.com/blood-requests">Blood Requests</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/workspace/blood.com/hospitals">Hospitals & Blood Banks</a>
                  </li>
                  <!-- Get Involved DROPDOWN -->
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="/workspace/blood.com" id="getInvolved" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Get Involved
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="getInvolved">
                        <li><a class="dropdown-item" href="/workspace/blood.com/blood-requests">Donate Blood</a></li>
                        <li><a class="dropdown-item" href="/workspace/blood.com/getInvolved">Blood Donation Campaigns</a></li>
                        <li><a class="dropdown-item" href="/workspace/blood.com/getInvolved">Work with Us</a></li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/workspace/blood.com/about">About Us</a>
                  </li>
                  <li class="nav-item">
                     <a role="button" class="btn btn-dark form-control" id="login-btn" href="/workspace/blood.com/user-login"><i class="fas fa-sign-in-alt"></i></a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>

<div class="container-fluid col-12 col-md-12 col-sm-12">
   <div class="row mt-3 mb-3"> 
      <?php
         $brequest = json_decode(file_get_contents("static/js/blood-request.json"),true);

         foreach($brequest as $br) {
      ?>
      <!-- First Card -->
         <div class="col-md-6 col-sm-12 mb-3">
            <div class="card  bg-light" style="border: 1px solid;">
               <div class="card-header text-center bg-danger text-white">
               Emergency Blood Needed 1
               </div>
               <div class="card-body row">
                  <div class="col-md-4 d-flex align-items-center" style="border-right: 1px solid;">
                     <img src="assets/images/blood-request-form.jpg" class="card-img" alt="Image" style="width: 100%; height: 100%;">
                  </div>
                  <div class="col-md-8">
                     <label> Blood Group :<span><?php echo $br["bg"] ?> </label><br>
                     <label> Name : <span><?php echo $br["name"] ?></span> </label><br>
                     <label> Conatct Number : <span><?php echo $br["contact"] ?> </label><br>
                     <label> Address : <span><?php echo $br["Hospital"] ?> </label><br>
                     <label> Email : <span><?php echo $br["Email"] ?> </label><br>
                     <label> Note : <span><?php echo $br["note"] ?> </label>
                     <div class="row mt-3">
                        <div class="col-md-6  col-sm-6">
                           <button class="btn btn-primary form-control comment-btn"><i class="fa fa-comment"></i></button>
                        </div>
                        <div class="col-md-6  col-sm-6">
                           <button class="btn btn-danger form-control" id="chat-icon"><i class="fa-solid fa-message"></i></button>
                        </div>
                        <div  class="comment-section" style="display:none;">
                           <div class="row mt-2">
                                 <div class="form-group col-md-10 col-sm-10">
                                    <textarea class="form-control " rows="1" id="comment"></textarea>
                                 </div>
                                 <div class="col-md-2 col-sm-2">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
                                 </div>
                           </div>
                        </div>
                     </div>
                     </div>
               </div>
            </div>
         </div>
         <?php 
         }
         ?>
      </div>
   </div>
   
   <!-- Info Section -->
<section class="info_section bg-dark">
    <div class="container ">
      <div class="row  mb-3 pb-4">
        <div class="col-md-3 info_logo">
          <div class="logo-box">
            <img src="assets/logos/logo.png" alt="">
            <span>
              Blood
            </span>
          </div>
          <p>
            Blood For Life
          </p>
          <div class="info_social">
            <div>
              <a href="">
                <i class="fab fa-2x fa-facebook"></i>
              </a>
            </div>
            <div>
              <a href="">
                <i class="fab fa-2x fa-twitter"></i>
              </a>
            </div>
            <div>
              <a href="">
                <i class="fab fa-2x fa-instagram"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3 info_address">
          <h5>
            Address
          </h5>
          <p>
            Sushma Godawari College, Itahari
          </p>
          <p>
            025-581052
          </p>
          <p>
            +977 9800966705
          </p>
          <p>
            <a href="">
              blood@gmail.com
            </a>
          </p>
        </div>
        <div class="col-md-3 info_links">

          <div class="info_nav ">
            <nav class="">
              <ul>
                <h5>
                  Links
                </h5>
                <li>
                  <a href="/workspace/blood.com"> Home</a>
                </li>
                <li>
                  <a href="/workspace/blood.com/about">About</a>
                </li>
                <li>
                  <a href="/workspace/blood.com/blood-requests">Blood Requests</a>
                </li>
                <li>
                  <a href="/workspace/blood.com/hospitals"> Hospitals</a>
                </li>
                <li>
                  <a href="/workspace/blood.com/blood-banks">Blood Banks</a>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <div class="col-md-3 info_news">
          <h5>
           Contact Us
          </h5>
          <form action="">
            <div>
              <input type="text" placeholder="Your Name">
            </div>
            <div>
              <input type="email" placeholder="Email">
            </div>
            <div class="d-flex justify-content-end">
              <button type="submit">
                Email
              </button>
            </div>
          </form>
        </div>
      </div>


    </div>
  </section>

      <!-- FOOTER -->
      <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2023 All Rights Reserved By
      <a href="/workspace/blood.com">Blood.com</a>
    </p>
  </section>
      <script src="static/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="static/fontawesome/js/all.min.js"></script>
      <script src="static/js/jquery-3.3.1.min.js"></script>
      <script src="static/js/popper.min.js"></script>
      <script src="static/js/bootstrap.min.js"></script>
      <script src="static/js/owl.carousel.min.js"></script>
      <script src="static/js/main.js"></script>
   </body>
</html>