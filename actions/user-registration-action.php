<?php
require_once('actions/dbconn.php');
require_once('actions/helper.php');

if (isset($_POST["register-btn"])) {

    $fname = test_data($_POST["fname"]); //full name
    $bgroup = test_data($_POST["bgroup"]); //bloodgroup
    $gender = test_data($_POST["gender"]); // gender
    $email = test_data($_POST["email"]);// email
    $password = test_data($_POST["password"]); //password
    $cpassword = test_data($_POST["cpassword"]); // confirm password
  
    $joined_date = "";


    // VALIDATION
    $fnameError = "";
    $bgroupError = "";
    $genderError = "";
    $emailError = "";
    $passwordError = "";
    $cpasswordError = "";
    $emptyError = "Required field, please fill it!";

    // Empty check
    if ($fname == "" || $email == "" || $password == "" || $cpassword == "") {
        $fnameError = $emailError = $passwordError = $cpasswordError = $emptyError;
    } else {
        // fname
        if (!preg_match("/^[a-zA-Z]+ [a-zA-Z]+$/", $fname)) {
            $fnameError = "Invalid  name";
        }


        // email
         // email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email address";
        } else {
            // Check if the email is already in use
            $query = "SELECT * FROM Users WHERE email = '$email'";
            $result = mysqli_query($conn, $query);
            $num_rows = mysqli_num_rows($result);
            if($num_rows > 0) {
                $emailError = "Email already exists";
            }
        }

        // password
        if (strlen($password) < 8 || strlen($password) > 32) {
            $passwordError = "password should be between 4 and 32 characters";
        }

        //confirm password
        if($cpassword != $password){
            $cpasswordError= "Password and confirm password didnot match";
        }

    }


    if ($fnameError == "" && $bgroupError == "" && $genderError == "" && $emailError == "" && $passwordError == "" && $cpasswordError == "") {
        $sql = "INSERT INTO Users(fname, bgroup, gender, email, password, cpassword, joined_date) 
            VALUES('$fname', '$bgroup', '$gender', '$email', '$password', '$cpassword', NOW())";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            $successMsg = "Account created successfully";
            MessagePush($successMsg);
            header("Location: /workspace/blood.com/user-login");
        } else {
            $msg = mysqli_error($conn);
            $errorMsg = "Internal server error";
            MessagePush($errorMsg);
            header("Location: /workspace/blood.com/user-registration");
        }
    } else {
        $errorMsg = "Form validation error";
        MessagePush($errorMsg);
        MessagePush($fname);
        MessagePush($fnameError);
        MessagePush($bgroup);
        MessagePush($bgroupError);
        MessagePush($gender);
        MessagePush($genderError);
        MessagePush($email);
        MessagePush($emailError);
        MessagePush($password);
        MessagePush($passwordError);
        MessagePush($cpassword);
        MessagePush($cpasswordError);
        header("Location: /workspace/blood.com/user-registration");
    }
}
