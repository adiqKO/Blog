<?php
/**
 * Created by PhpStorm.
 * User: Daily
 * Date: 08.10.2018
 * Time: 21:17
 */

class NewClass
{
    public $info = "This is sparta";

    public function __toString(){

        return "elo";
    }
}
$object = new NewClass;

 echo $object -> info;
//var_dump($object);
echo $object ;