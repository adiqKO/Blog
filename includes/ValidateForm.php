<?php
/**
 * Created by PhpStorm.
 * User: Daily
 * Date: 14.10.2018
 * Time: 20:14
 */

class ValidateForm
{
    protected $errors = [];

    protected function checkUsername($username)
    {
        if(!preg_match('/^[a-zA-z0-9]{3,20}$/D',$username)){
           $this->errors[] = 'username';
        }
    }

    protected function checkEmail($email)
    {
        $test = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (empty($test)){
            $this->errors[] = 'email';
        }
    }

    protected function checkPassword($password)
    {
        if(strlen($password)<6){
            $this->errors[] = 'pass';
        }
    }

    public function getErrors(){
        return $this->errors;
    }
}