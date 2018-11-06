<?php
/**
 * Created by PhpStorm.
 * User: Daily
 * Date: 06.11.2018
 * Time: 00:20
 */

    session_start();
    session_destroy();

    header("Location: ../index.php");
    exit();