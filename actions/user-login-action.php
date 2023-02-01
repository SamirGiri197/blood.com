<?php

require_once('actions/dbconn.php');
require_once('actions/helper.php');

if (isset($_POST['login-btn'])) {
    $email = test_data($_POST['email']);
    $password = test_data($_POST['password']);

    if ($email == "" || $password == "") {
        MessagePush("Please, fill all the fields!");
        header("Location: /workspace/blood.com/user-login");
    } else {
        $sql = "SELECT * FROM Users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['userId'] = $row['userID'];
            $_SESSION['fname'] = $row['fname'];

            header("Location: /workspace/blood.com");
        } else if ($result && mysqli_num_rows($result) == 0) {
            MessagePush("Username or password didn't match");
            header("Location: /workspace/blood.com/user-login");
        } else {
            MessagePush("Internal server error");
            header("Location: /workspace/blood.com.com/user-login");
        }
    }
}
