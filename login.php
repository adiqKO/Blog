<?php

require_once ('includes/Dbs.php');
require_once ('includes/ValidateForm.php');
require_once ('includes/ValidateLogin.php');

if(isset($_POST['confirm'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $valid =  new ValidateLogin($email,$password);

    if(empty($valid->getErrors()))
    {
        $object = new Dbs();
        $result = $object->logUser($email, $password);
       if($result != false){
            session_start();
            $_SESSION['userId'] = $result['id'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['role'] = $result['role'];

            header("Location: dashboard.php");
        }else{
            header("Location: account.php?error=unsuccess");
        }

    }else{
        header("Location: account.php?error=".$valid->getErrors()[0]);
    }

}