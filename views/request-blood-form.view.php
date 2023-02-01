<?php
require_once('actions/helper.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood | Online Blood Management System</title>
    <link rel="stylesheet" href="static/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="static/styles/request-form.css">
    <link rel="stylesheet" type="text/css" href="static/styles/home.css">
    <link rel="stylesheet" type="text/css" href="static/styles/registration.css">
    <link rel="shortcut icon" href="assets/logos/icon.png" type="image/png"/>
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
                            <li><a class="dropdown-item" href="/workspace/blood.com/getInvolved">Donate Blood</a></li>
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
                                <!-- SIGNED IN Username -->
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
   
    <div class="col-12 col-md-8 col-sm-5 mx-auto mt-4">
                
        <form action="/workspace/blood.com/request-blood" method="post" enctype="multipart/form-data">
                    <!-- Error message -->
            <div class="row text-danger">
                 <?php echo MessagePop() ?>
            </div>

                    <div class="row">
                        <div class="col-12 text-center">
                            <h1>Blood Request Form</h1>
                        </div>
                    </div>
                    <div class="form-group row">
                     <!-- Full Name -->
                    <div class="col-12 col-md-6 col-sm-12">
                        <label for="fname">Full Name:</label>
                        <input type="text" class="form-control" id="fname" name="fname" value="<?php echo MessagePop() ?>" placeholder="Full Name" required>
                        <div class="text-danger"><?php echo MessagePop() ?></div>
                    </div>
                    <!-- contact number -->
                    <div class="col-12 col-md-6 col-sm-12">
                        <label for="contact">Contact Number:</label>
                        <input type="text" class="form-control" id="contact" name="contact" value="<?php echo MessagePop() ?>" placeholder="Contact Number" required>
                        <div class="text-danger"><?php echo MessagePop() ?></div>
                    </div>
                   
            </div>   

              <div class="form-group row">
                    <div class="col-12 col-md-6 col-sm-12 mt-2" id="blood-group">
                        <label for="bgroup">Blood Group:</label><br>
                        <select class="form-control custom-select mr-sm-2" id="bgroup" name="bgroup" style: display:block>
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
                    <div class="col-12 col-md-6 col-sm-12 mt-2">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo MessagePop() ?>" placeholder="example@example.com" required>
                        <div class="text-danger"><?php echo MessagePop() ?></div>
                    </div>
                  
                </div>
                <div class="form-group row">
                    <div class="col-12 col-md-6 col-sm-12 mt-2" id="blood-group">
                        <label for="note">Note:</label>
                        <textarea class="form-control" id="note" name="note" row="3"></textarea> 
                        <div class="text-danger"><?php echo MessagePop() ?></div>
                    </div>
                    <div class="col-12 col-md-6 col-sm-12 mt-2">
                        <label for="photo"><i class="fab fa-wpforms"></i>Requisition Photo:</label>
                        <input type="file" class="custom-file-input" id="photo" name="photo" value="<?php echo MessagePop() ?>" required>
                        <div class="text-danger"><?php echo MessagePop() ?></div>
                    </div>
                  
                </div>
                
                <div class="form-group row">
                    <div class="col-12 col-md-6 col-sm-12 mt-4">
                        <input type="submit" class="btn btn-primary form-control" id="register-btn" name="register-btn" value="Request to Blood Banks">
                    </div>
                    <div class="col-12 col-md-6 col-sm-12 mt-4 ">
                        <input type="submit" class="btn btn-danger form-control" id="register-btn" name="register-btn" value="Asks From User">
                    </div>
                </div>          
                </form>
            </div>

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
                Contact Us: blood@gmail.com
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