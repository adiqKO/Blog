<?php
/**
 * Created by PhpStorm.
 * User: Daily
 * Date: 13.10.2018
 * Time: 16:22
 */

class User
{
    private $id;
    private $username;
    private $role;

    public function __construct($id, $username, $role){
        $this->id = $id;
        $this->username = $username;
        $this->role = $role;

    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getId(){

        return $this->id;
    }


}