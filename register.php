<?php

require_once ('includes/Dbs.php');
require_once ('includes/ValidateForm.php');
require_once ('includes/ValidateRegister.php');

if(isset($_POST['confirm']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass_1 = $_POST['pass_1'];
    $pass_2 = $_POST['pass_2'];
    $role = $_POST['role'];

    $valid = new ValidateRegister($username, $email, $pass_1, $pass_2);

    if(empty($valid->getErrors()))
    {
        $object = new Dbs();
        $result = $object->addUser($username, $email, $role, $pass_1);
        if($result === true){
            header("Location: dashboard.php?page=add&message=success");
            exit();
        }else{
                header("Location: dashboard.php?page=add&error=fail");
                exit();
        }

    }else{
        header("Location: dashboard.php?page=add&error=".$valid->getErrors()[0]);
        exit();
    }

}else {
    header("Location: dashboard.php?page=add.php");
}


