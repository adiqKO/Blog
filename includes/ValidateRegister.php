<?php
/**
 * Created by PhpStorm.
 * User: Daily
 * Date: 15.10.2018
 * Time: 21:11
 */

class ValidateRegister extends ValidateForm
{
    public function __construct($username, $email, $pass_1, $pass_2)
    {
        $this->checkUsername($username);
        $this->checkEmail($email);
        $this->checkEqual($pass_1, $pass_2);
        $this->checkPassword($pass_1);
    }

    private function checkEqual($pass_1, $pass_2)
    {
        if($pass_1 !== $pass_2 ){
            $this->errors[] = 'equal';
        }
    }
}