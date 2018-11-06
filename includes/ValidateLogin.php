<?php
/**
 * Created by PhpStorm.
 * User: Daily
 * Date: 01.11.2018
 * Time: 22:54
 */

class ValidateLogin extends ValidateForm
{
    public function __construct($email, $password)
    {
        $this->checkEmail($email);
        $this->checkPassword($password);
    }
}