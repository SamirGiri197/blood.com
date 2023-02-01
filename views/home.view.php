<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Blood | Online Blood Management System</title>
      <link rel="stylesheet" href="static/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="static/fontawesome/css/all.min.css">
      <link rel="stylesheet" type="text/css" href="static/styles/home.css">
      <link rel="shortcut icon" href="assets/logos/icon.png" type="image/png"/>
      <script src="static/js/jquery.js"></script>
      <script>
         $(document).ready(function() {
             var descriptionHeight = $('.description-section').outerHeight();
             $('.image-section').height(descriptionHeight);
             $('requisition-img').height(descriptionHeight);
         });
         
         $(document).ready(function() {
             $(".comment-btn").click(function() {
             $(this).closest(".card").find(".comment-section").toggle();
         });
         });
         
      </script>
   </head>
   <body>
      <!-- NAVBAR -->
      <nav class="navbar navbar-expand-md navbar-dark sticky-top" id="navbar">
         <div class="container-fluid">
            <a class="navbar-brand" href="/workspace/blood.com"><img src="assets/logos/Icon.png" height="50" width="60" alt="Logo" id="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                     <a class="nav-link active" href="/workspace/blood.com">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/workspace/blood.com/blood-requests">Blood Requests</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/workspace/blood.com/hospitals">Hospitals</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/workspace/blood.com/blood-banks">Blood Banks</a>
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
               </ul>
               <ul class="navbar-nav mb-2 mb-lg-0">
                  <li class="nav-item" id=>
                     <a role="button" class="nav-link" id="request-blood" href="/workspace/blood.com/request-blood">Request Blood</a>
                  </li>
                  <li class="nav-item ms-4">
                     <a role="button" class="nav-link" id="donate-blood" href="/workspace/blood.com/blood-requests">Donate Blood</a>
                  </li>
               </ul>
               <!-- <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                  </form> -->
               <?php
                  if (isset($_SESSION['userId']) && !is_null($_SESSION['userId'])) {
                  ?>
               <ul class="navbar-nav mb-2 mb-lg-0">
                  <!-- SIGNED IN User -->
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="options" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <!-- SIGNED IN Full Name -->
                        <?php echo $_SESSION['fname'] ?>
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="options">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="/workspace/blood.com/user-logout">Logout</a></li>
                     </ul>
                  </li>
               </ul>
               <?php
                  } else {
                  ?>
               <ul class="navbar-nav mb-2 mb-lg-0 ms-4">
               <li class="nav-item">
                  <a role="button" class="btn" id="login-btn"  href="/workspace/blood.com/user-login">Login</a>
               </li>
               <?php
                  }
                  ?>
            </div>
         </div>
      </nav>
      <!-- Main -->
   <main class="bg-danger">
      <div class="container-fluid bg-danger mt-3 mb-3">
            <div class= "d-flex h-100">
               <img src="assets/images/blood-donate.jpg" class="img-fluid mx-auto" alt="bloodImage" style="width: 100vw; height: 100vh;">
            </div>
      </div>
      <div class="container-fluid bg-danger">
         
            <div class="row">
               <div class="col-md-8 col-sm-12">
               
               <!-- Blood Requests Tittle -->
                  <h3 class="text-center text-danger bg-dark">Blood Requests</h3>

                  <!-- First row of Blood requests -->
                  <div class="row mb-2">
                  <!-- First Card -->
                     <div class="col-md-6 col-sm-12">
                        <div class="card text-center bg-light" style="border: 1px solid;">
                           <div class="card-header bg-danger text-white">Emergency Blood Needed</div>
                           <div class="card-body row">
                              <div class="col-md-4 d-flex align-items-center" style="border-right: 1px solid;">
                                 <img src="assets/images/blood-request-form.jpg" class="card-img" alt="Image" style="width: 100%; height: 100%;">
                              </div>
                              <div class="col-md-8">
                                 <label>Full Name :<span> Samir Giri </span></label> <br>
                                 <label>Blood Group :<span> A+ </span></label>  <br>                 
                                 <label>Contact Number :<span> 9800966705</span></label> <br>                           
                                 <label>Location :<span> Biratchowk </span></label>   <br>                    
                                 <label>Email :<span> samirgiri197@gmail.com</span></label> <br>                          
                                 <label>Remarks :<span> Thank you  </span></label>  
                              </div>
                           </div>
                           <div class="card-footer  justify-content-between">
                              <button class="btn btn-primary">Chat</button>
                              <button class="btn btn-success comment-btn">Comment</button>
                           </div>
                           <div class="comment-section" style="display:none;">
                              <textarea class="form-control mt-2" placeholder="Type your comment here......" rows="1"></textarea>
                              <button class="btn btn-danger mt-3 mb-2" type="submit">Submit</button>
                           </div>
                        </div>
                     </div>
                     <!-- Another card here -->
                     <div class="col-md-6 col-sm-12">
                        <div class="card text-center bg-light" style="border: 1px solid;">
                           <div class="card-header bg-danger text-white">Emergency Blood Needed</div>
                           <div class="card-body row">
                              <div class="col-md-4 d-flex align-items-center" style="border-right: 1px solid;">
                                 <img src="assets/images/blood-request-form.jpg" class="card-img" alt="Image" style="width: 100%; height: 100%;">
                              </div>
                              <div class="col-md-8">
                                 <label>Full Name :<span> Samir Giri </span></label> <br>
                                 <label>Blood Group :<span> A+ </span></label>  <br>                 
                                 <label>Contact Number :<span> 9800966705</span></label> <br>                           
                                 <label>Location :<span> Biratchowk </span></label>   <br>                    
                                 <label>Email :<span> samirgiri197@gmail.com</span></label> <br>                          
                                 <label>Remarks :<span> Thank you  </span></label>  
                              </div>
                           </div>
                           <div class="card-footer  justify-content-between">
                              <button class="btn btn-primary">Chat</button>
                              <button class="btn btn-success comment-btn">Comment</button>
                           </div>
                           <div class="comment-section" style="display:none;">
                              <textarea class="form-control mt-2" placeholder="Type your Comment here....." rows="1"></textarea>
                              <button class="btn btn-danger mt-3 mb-2" type="submit">Submit</button>
                           </div>
                        </div>
                     </div>
                  </div>

                <!-- Second row of Blood requests -->
                <div class="row mb-2">
                <!-- First Card -->
                     <div class="col-md-6 col-sm-12">
                        <div class="card text-center bg-light" style="border: 1px solid;">
                           <div class="card-header bg-danger text-white">Emergency Blood Needed</div>
                           <div class="card-body row">
                              <div class="col-md-4 d-flex align-items-center" style="border-right: 1px solid;">
                                 <img src="assets/images/blood-request-form.jpg" class="card-img" alt="Image" style="width: 100%; height: 100%;">
                              </div>
                              <div class="col-md-8">
                                 <label>Full Name :<span> Samir Giri </span></label> <br>
                                 <label>Blood Group :<span> A+ </span></label>  <br>                 
                                 <label>Contact Number :<span> 9800966705</span></label> <br>                           
                                 <label>Location :<span> Biratchowk </span></label>   <br>                    
                                 <label>Email :<span> samirgiri197@gmail.com</span></label> <br>                          
                                 <label>Remarks :<span> Thank you  </span></label>  
                              </div>
                           </div>
                           <div class="card-footer  justify-content-between">
                              <button class="btn btn-primary">Chat</button>
                              <button class="btn btn-success comment-btn">Comment</button>
                           </div>
                           <div class="comment-section" style="display:none;">
                              <textarea class="form-control mt-2" placeholder="Type your comment here......" rows="1"></textarea>
                              <button class="btn btn-danger mt-3 mb-2" type="submit">Submit</button>
                           </div>
                        </div>
                     </div>
                     <!-- Another card here -->
                     <div class="col-md-6 col-sm-12">
                        <div class="card text-center bg-light" style="border: 1px solid;">
                           <div class="card-header bg-danger text-white">Emergency Blood Needed</div>
                           <div class="card-body row">
                              <div class="col-md-4 d-flex align-items-center" style="border-right: 1px solid;">
                                 <img src="assets/images/blood-request-form.jpg" class="card-img" alt="Image" style="width: 100%; height: 100%;">
                              </div>
                              <div class="col-md-8">
                                 <label>Full Name :<span> Samir Giri </span></label> <br>
                                 <label>Blood Group :<span> A+ </span></label>  <br>                 
                                 <label>Contact Number :<span> 9800966705</span></label> <br>                           
                                 <label>Location :<span> Biratchowk </span></label>   <br>                    
                                 <label>Email :<span> samirgiri197@gmail.com</span></label> <br>                          
                                 <label>Remarks :<span> Thank you  </span></label>  
                              </div>
                           </div>
                           <div class="card-footer  justify-content-between">
                              <button class="btn btn-primary">Chat</button>
                              <button class="btn btn-success comment-btn">Comment</button>
                           </div>
                           <div class="comment-section" style="display:none;">
                              <textarea class="form-control mt-2" placeholder="Type your Comment here....." rows="1"></textarea>
                              <button class="btn btn-danger mt-3 mb-2" type="submit">Submit</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a role="button" class="form-control btn btn-dark text-center mb-3" href="/workspace/blood.com/blood-requests"> See More Blood Requests </a>
               </div>






            
               <!-- Hospital and blood bank section -->
               <div class="col-md-4 col-sm-12" style="border: 1px solid white;">
               
                  <div class="row bg-success" style="border-bottom: 2px solid green;">
                     <div class="col-12 col-md-12 col-sm-12">
                     <h3 class="text-center text-danger bg-dark">Hospitals</h3>
                        <!-- first Hospital -->
                        <div class="card text-center bg-light" style="border: 1px solid;">
                           <div class="card-header bg-info text-white">BPKIHS (Ghopa Camp)</div>
                           <div class="card-body row"> 
                              <div class="col-md-2 d-flex align-items-center" style="border-right: 1px solid;">
                                 <img src="assets/images/hospital.png" class="card-img" alt="Image" style="width: 100%; height: 100%;">
                              </div>
                                 <div class="col-md-10">
                                    <label>Location :<span> Dharan </span></label>   <br>                    
                                    <label>Contact Number :<span> 9800966705</span></label> <br>                          
                                 </div>                         
                           </div>
                        </div>
                        <!-- Second Hospital -->
                         <div class="card text-center bg-light mt-1 mb-1" style="border: 1px solid;">
                           <div class="card-header bg-info text-white">BPKIHS (Ghopa Camp)</div>
                           <div class="card-body row"> 
                              <div class="col-md-2 d-flex align-items-center" style="border-right: 1px solid;">
                                 <img src="assets/images/hospital.png" class="card-img" alt="Image" style="width: 100%; height: 100%;">
                              </div>
                                 <div class="col-md-10">
                                    <label>Location :<span> Dharan </span></label>   <br>                    
                                    <label>Contact Number :<span> 9800966705</span></label> <br>                          
                                 </div>                         
                           </div>
                        </div>
                           <a role="button" class="form-control btn btn-dark text-center mt-1 mb-3" href="/workspace/blood.com/hospitals"> Find More Hospitals </a>
                  </div>
               </div>

                 <!--  blood bank section -->
               
               
                  <div class="row bg-secondary mt-2">
                     <div class="col-12 col-md-12 col-sm-12">
                     <h3 class="text-center text-danger bg-dark">Blood Banks</h3>
                        <!-- first bloodbank -->
                        <div class="card text-center bg-light" style="border: 1px solid;">
                           <div class="card-header bg-info text-white">BPKIHS (Ghopa Camp)</div>
                           <div class="card-body row"> 
                              <div class="col-md-2 d-flex align-items-center" style="border-right: 1px solid;">
                                 <img src="assets/images/bloodbank.png" class="card-img" alt="Image" style="width: 100%; height: 100%;">
                              </div>
                                 <div class="col-md-10">
                                    <label>Location :<span> Dharan </span></label>   <br>                    
                                    <label>Contact Number :<span> 9800966705</span></label> <br>                          
                                 </div>                         
                           </div>
                        </div>
                        <!-- Second bloodbank -->
                         <div class="card text-center bg-light mt-1 mb-1" style="border: 1px solid;">
                           <div class="card-header bg-info text-white">BPKIHS (Ghopa Camp)</div>
                           <div class="card-body row"> 
                              <div class="col-md-2 d-flex align-items-center" style="border-right: 1px solid;">
                                 <img src="assets/images/bloodbank.png" class="card-img" alt="Image" style="width: 100%; height: 100%;">
                              </div>
                                 <div class="col-md-10">
                                    <label>Location :<span> Dharan </span></label>   <br>                    
                                    <label>Contact Number :<span> 9800966705</span></label> <br>                          
                                 </div>                         
                           </div>
                        </div>
                           <a role="button" class="form-control btn btn-dark text-center mt-1 mb-3" href="/workspace/blood.com/blood-banks"> Find More Blood Banks </a>
                  </div>
               </div>


               
            </div>
         </div>
      </div>
      <div class="container-fluid bg-danger mt-3 mb-3">
            <div class= "d-flex h-100">
               <img src="assets/images/bg-image.jpg" class="img-fluid mx-auto" alt="bloodImage" style="width: 100vw; height: 100vh;">
            </div>
      </div>

   </main>
      <!-- FOOTER -->
      <div class="container-fluid" id="footer">
         <div class="row p-4  text-center text-white">
            <div class="mt-3">
               Follow us on:<br>
               <a role="button" href="https://www.facebook.com/profile.php?id=100089844251738&mibextid=ZbWKwL"><i class="fab fa-2x fa-facebook"></i></a> &nbsp;&nbsp;
               <a role="button" href="https:/www.twitter.com"><i class="fab fa-2x fa-twitter"></i></a>&nbsp;&nbsp;&nbsp;
               <a role="button" href="https:/www.twitter.com"><i class="fab fa-2x fa-instagram"></i></a>
            </div>
            <div class="mt-3">
               Contact Us: <a href="mailto:blood@gmail.com" style="text-decoration:none; color:white;">blood@gmail.com</a>
            </div>
            <div class="mt-3">
               &copy;2023 - blood.com. All rights reserved.
            </div>
         </div>
      </div>
      <script src="static/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="static/fontawesome/js/all.min.js"></script>
   </body>
</html>