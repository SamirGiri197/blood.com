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

      <script>
  // Get all event elements
  const events = document.querySelectorAll('.event');

  // Add click event listener to each event
  events.forEach(event => {
    event.addEventListener('click', () => {
      // Toggle the visibility of the event details
      event.querySelector('.event-details').classList.toggle('show');
    });
  });
</script>
      
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
            <div class="col-12 col-md-5 col-sm-5 mx-auto mt-4">
                
                <form action="/workspace/blood.com/user-registration" method="post" enctype="multipart/form-data">
                    <!-- Error message -->
                    <div class="row text-danger">
                        <?php echo MessagePop() ?>
                    </div>

                    <div class="row">
                        <div class="col-12 text-center">
                            <h4>Registration Form</h4>
                        </div>
                    </div>
                     <!-- Full Name -->
                    <div class="form-group row">  
                    <div class="col-12 col-sm-12">
                        <label for="fname">Full Name:</label>
                        <input type="text" class="form-control" id="fname" name="fname" value="<?php echo MessagePop() ?>" placeholder="Full Name" required>
                        <div class="text-danger"><?php echo MessagePop() ?></div>
                    </div>
                    </div>
                <div class="form-group row">
                     <!--  blood Group -->
                    <div class="col-4 mt-2" id="blood-group">
                        <label for="bgroup">Blood Group:</label>
                        <select class="form-control custom-select mr-sm-2" id="bgroup" name="bgroup">
                            <option value="-1" selected>Select...</option>
                            <option value="A+ve">A +ve</option>
                            <option value="A-ve">A -ve</option>
                            <option value="B+ve">B +ve</option>
                            <option value="B-ve">B -ve</option>
                            <option value="AB+ve">AB +ve</option>
                            <option value="AB-ve">AB -ve</option>
                            <option value="O+ve">O +ve</option>
                            <option value="O-ve">O -ve</option>
                        </select> 
                       
                        <div class="text-danger"><?php echo MessagePop() ?></div>
                    </div>

                     <!-- Gender -->
                    <div class="col mt-2">
                        <div class="row text-center">
                            <label for="gender"> Gender: </label> 
                        </div>
                        
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male" >
                            <label class="form-check-label" for="male">
                                Male
                            </label>
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female" >
                            <label class="form-check-label" for="female">
                                Female
                            </label>
                            <input class="form-check-input" type="radio" name="gender" id="other" value="other" >
                            <label class="form-check-label" for="other">
                                Other
                            </label>
                     
                        <div class="text-danger"><?php echo MessagePop() ?></div>
                    </div>
                    
                </div>
                 <!-- Email -->
                 <div class="form-group row mt-2">
                    <div class="col">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo MessagePop() ?>" placeholder="example@example.com" required>
                        <div class="text-danger"><?php echo MessagePop() ?></div>
                    </div>
                 </div>
                  <!-- Password -->
                <div class="form-group row mt-2">
                    <div class="col">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" value="<?php echo MessagePop() ?>" placeholder="8 - 32 Chaaracters" required>
                        <div class="text-danger"><?php echo MessagePop() ?></div>
                    </div>
                 </div>

                 <!-- Confirm Password -->
                 <div class="form-group row mt-2">  
                    <div class="col">
                        <label for="cpassword">Confirm Password:</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword" value="<?php echo MessagePop() ?>" placeholder="8 - 32 Chaaracters" required>
                        <div class="text-danger"><?php echo MessagePop() ?></div>
                    </div>
                 </div>
                    
 
                    <div class="form-group row mt-4">
                        <input type="submit" class="btn btn-primary" id="register-btn" name="register-btn" value="Register">
                    </div>


                    <div class="row mt-2">
                        <div class="col-12 text-center">
                            Already Registered? <br>
                            <a id="login" href="/workspace/blood.com/user-login">Login</a>
                        </div>
                    </div>
                </form>
            </div>

 <!-- FOOTER -->
    <<!-- Info Section -->
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