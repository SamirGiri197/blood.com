<?php
    function test_data($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function MessagePush($msg){
        if(!isset($_SESSION['messages'])){
            $_SESSION['messages'] = array();
        }

        $_SESSION['messages'][] = $msg;
    }

    function MessagePop(){
        if(!isset($_SESSION['messages']) || count($_SESSION['messages'])==0){
            return false;
        }
        return array_shift($_SESSION['messages']);
    }
?>