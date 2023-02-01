<?php

unset($_SESSION['userId']);
unset($_SESSION['userName']);

session_destroy();

header("Location: /workspace/blood.com");

?>