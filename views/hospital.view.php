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
                <?php
                  $links = json_decode(file_get_contents("static/js/links.json"),true);

                  foreach($links as $link ){

                  
                ?>
                  <li class="nav-item">
                     <a class="nav-link" href="<?php echo $link["href"] ?>"><?php echo $link["name"] ?></a>
                  </li>
                  <!-- Get Involved DROPDOWN -->
                  <?php
                        }
                  ?>
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

      <!-- Main -->
      <div class="container-fluid">
        <div class="row mt-3 mb-5">
              <!-- Filter Area -->
              <div class="col-md-6 col-sm-12">
                <div class="row">
                  <div class="col-sm-auto mb-3 mb-sm-0">
                    <select class="form-control form-select" name="filter1">
                      <option value="filter">Filter By</option>
                      <option value="location">Location</option>
                      <option value="hospital">Hospital</option>
                      <option value="blood-bank">Blood Bank</option>
                    </select>
                  </div>
                  <div class="col-sm-auto mb-3 mb-sm-0">
                    <select  class="form-control form-select" name="filter2">
                      <option value="filter">Select Province</option>
                      <option value="province">Province</option>
                    </select>
                  </div>
                  <div class="col-sm-auto mb-3 mb-sm-0">
                    <select class="form-control form-select" name="filter3">
                      <option value="filter">Select District</option>
                      <option value="district">District</option>
                    </select>
                  </div>
              </div>
            </div>
          <div class="col-md-6 col-sm-12">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Type here to search">
              <div class="input-group-append">
                <button class="btn btn-danger" type="button"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>  
        </div>
      </div>

      <div class="row mt-5  mb-2">
               <!-- blood banks Tittle -->
            <div class="bg-dark text-center">
               <h1 class=" text-danger ">
                  Hospitals
               </h1>
               <h6 class="text-light ">
                  Contact Infos of Hospitals.
               </h6>
            </div>
      </div>
      
          <div class="col-12 col-md-12 col-sm-12 mt-3">
            <div class="container-fluid row mb-2">
                <?php
                // Load JSON data
                $data = json_decode(file_get_contents("static/js/hospital.json"), true);
                
                // Loop through each hospital and generate HTML
                foreach ($data as $hospital) {
                    ?>
                    <div class="col-md-4 col-sm-12 mb-2">
                        <div class="card text-center bg-light" style="border: 1px solid;">
                            <div class="card-header bg-danger text-white">
                                <?php echo $hospital["name"]; ?>
                            </div>
                            <div class="card-body row">
                            <div class="col-md-4 d-flex align-items-center" style="border-right: 1px solid;">
                                <img src="<?php echo $hospital['image'] ?>" class="card-img" alt="Image" style="width: 100%; height: 100%;">
                            </div>
                          <div class="col-md-8">
                                    <label>
                                        <a href="tel:<?php echo $hospital["phone"]; ?>"><i class="fa-solid fa-phone"></i></a>
                                        <span>
                                            <a href="tel:<?php echo $hospital["phone"]; ?>"><?php echo $hospital["phone"]; ?></a>
                                        </span>
                                    </label>
                                    <br>
                                    <label>
                                      <i class="fa-solid fa-location-dot"></i>
                                      <span>
                                          <?php echo $hospital["location"][0]["City"]. ', ' . $hospital["location"][0]["district"]. ', ' . $hospital["location"][0]["province"]; ?>
                                      </span>
                                    </label>

                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>

            
            <div class="row mt-5  mb-2">
               <!-- blood banks Tittle -->
               <div class="bg-dark text-center">
               <h1 class=" text-danger ">
                  Blood Banks
               </h1>
               <h6 class="text-light ">
                  Contact Infos of Blood Banks.
               </h6>
               </div>
            <div class="col-12 col-md-12 col-sm-12 mt-3">
               <!-- Blood Banks -->
               <div class="container-fluid row mb-2">
            <?php
            // Load JSON data
            $data = json_decode(file_get_contents("static/js/bloodbank.json"), true);
            
            // Loop through each bloodbank and generate HTML
            foreach ($data as $bloodbank) {
                ?>
                <div class="col-md-4 col-sm-12 mb-2">
                    <div class="card text-center bg-light" style="border: 1px solid;">
                        <div class="card-header bg-danger text-white">
                            <?php echo $bloodbank["name"]; ?>
                        </div>
                        <div class="card-body row">
                        <div class="col-md-4 d-flex align-items-center" style="border-right: 1px solid;">
										        <img src="<?php echo $bloodbank['image'] ?>" class="card-img" alt="Image" style="width: 100%; height: 100%;">
									      </div>
                       <div class="col-md-8">
                                <label>
                                    <a href="tel:<?php echo $bloodbank["phone"]; ?>"><i class="fa-solid fa-phone"></i></a>
                                    <span>
                                        <a href="tel:<?php echo $bloodbank["phone"]; ?>"><?php echo $bloodbank["phone"]; ?></a>
                                    </span>
                                </label>
                                <br>
                                <label>
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span>
                                        <?php echo $bloodbank["location"]; ?>
                                    </span>
                                </label>
                                <br>
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
    <div class="container">
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

                <?php
                  $links = json_decode(file_get_contents("static/js/links.json"),true);

                  foreach($links as $link ){
                    ?>
                    <li>
                      <a href="<?php echo $link["href"] ?>"> <?php echo $link["name"] ?></a>
                    </li>
                  <?php
                  }
                  ?>
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
              <input type="email" placeholder="Message">
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



  <script src="static/js/jquery-3.3.1.min.js"></script>
  <script src="static/js/popper.min.js"></script>
  <script src="static/js/bootstrap.min.js"></script>
  <script src="static/js/owl.carousel.min.js"></script>
  <script src="static/js/main.js"></script>
   </body>
</html>