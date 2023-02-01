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
                                <?php echo $_SESSION['userName'] ?>
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
    <p>
    Use a CSS preprocessor: You can use a CSS preprocessor such as Sass or Less to write your custom styles. These preprocessors allow you to use variables, nested selectors, and other advanced features.
It's recommended to use the first and third options as it makes it easy to maintain and update the code and also to keep your custom css separate from bootstrap css.
    </p>
    
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