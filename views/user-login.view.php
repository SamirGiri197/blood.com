<?php require_once('actions/helper.php') ?>
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
    <div class="container">
        <div class="row">
            <div class="col-10 col-md-5 mx-auto mt-4">
                <div class="text-dark mb-2">
                    <?php echo MessagePop() ?>
                </div>
                <form action="/workspace/blood.com/user-login" method="post">
                    <div class="row">
                        <div class="col-12 text-center" id="top">
                            <h3>Log Into blood.com</h3>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <!-- <i class="fas fa-user"></i>&nbsp; -->
                        <input type="email" class="input-field" id="email" name="email" placeholder="email" required>
                    </div>

                    <div class="row mt-3">
                        <!-- <i class="fas fa-key"></i>&nbsp; -->
                        <input type="password" class="input-field" id="password" name="password" placeholder="password" required>
                    </div>

                    <div class="row mt-3">
                        <input type="submit" class="btn btn-primary" id="login-btn" name="login-btn" value="Log In">
                    </div>

             
                   

                    <div class="row mt-5">
                        <div class="col-12 text-center">
                            Already Register? <br>
                             <a style="text-decoration: none" href="/workspace/blood.com/user-registration">Register Now</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>


    <script src="static/js/jquery-3.3.1.min.js"></script>
   <script src="static/js/popper.min.js"></script>
   <script src="static/js/bootstrap.min.js"></script>
   <script src="static/js/owl.carousel.min.js"></script>
   <script src="static/js/main.js"></script>
</body>

</html>