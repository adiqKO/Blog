<?php
/**
 * Created by PhpStorm.
 * User: Daily
 * Date: 19.10.2018
 * Time: 23:25
 */
require_once ('includes/Dbs.php');
require_once ('includes/ValidateForm.php');
require_once ('includes/ValidateNewsletter.php');

if(isset($_POST['confirm'])){

    $email = $_POST['email'];

    $valid = new ValidateNewsletter($email);

    if(empty($valid->getErrors()))
    {
        $object = new Dbs();
        $object->addToNews($email);
    }else{
        header("Location: index.php");
    }
}

header("Location: index.php");

