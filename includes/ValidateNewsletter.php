<?php
/**
 * Created by PhpStorm.
 * User: Daily
 * Date: 19.10.2018
 * Time: 23:37
 */

class ValidateNewsletter extends ValidateForm
{

    public function __construct($email)
    {
        $this->checkEmail($email);
    }

}