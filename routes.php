<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}".'/workspace/blood.com/router.php');

// ##################################################
// ##################################################
// ##################################################

$site = "workspace/blood.com";
$projectroot = "workspace/blood.com";

// Static GET
// In the URL -> http://localhost
// The output -> Index
// get('/', 'index.php');


// HOME page
get('/'.$site, $projectroot.'/views/home.view.php');

// About Us page
get('/'.$site.'/about', $projectroot.'/views/about.php');

//getInvolved Page
get('/'.$site.'/getInvolved', $projectroot.'/views/getInvolved.view.php');

//Login Page
get('/'.$site.'/user-login', $projectroot.'/views/user-login.view.php');
post('/'.$site.'/user-login', $projectroot.'/actions/user-login-action.php');

//Register Page
get('/'.$site.'/user-registration', $projectroot.'/views/user-registration.view.php');
post('/'.$site.'/user-registration', $projectroot.'/actions/user-registration-action.php');

//Hospital Page
get('/'.$site.'/hospitals', $projectroot.'/views/hospital.view.php');

//Blood Banks Page
get('/'.$site.'/blood-banks', $projectroot.'/views/blood-bank.view.php');

//Blood Requests Page
get('/'.$site.'/blood-requests', $projectroot.'/views/blood-requests.view.php');


// Blood request form
get('/'.$site.'/request-blood', $projectroot.'/views/request-blood-form.view.php');
post('/'.$site.'/request-blood', $projectroot.'/views/request-blood-form-action.php');

// Dynamic GET. Example with 1 variable
// The $id will be available in user.php
// get('/user/$id', 'user.php');

// Dynamic GET. Example with 2 variables
// The $name will be available in user.php
// The $last_name will be available in user.php
// get('/user/$name/$last_name', 'user.php');

// Dynamic GET. Example with 2 variables with static
// In the URL -> http://localhost/product/shoes/color/blue
// The $type will be available in product.php
// The $color will be available in product.php
// get('/product/$type/color/:color', 'product.php');

// Dynamic GET. Example with 1 variable and 1 query string
// In the URL -> http://localhost/item/car?price=10
// The $name will be available in items.php which is inside the views folder
// get('/item/$name', 'views/items.php');


// ##################################################
// ##################################################
// ##################################################
// any can be used for GETs or POSTs

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
// any('/404','views/404.php');
