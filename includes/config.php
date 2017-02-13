<?php

    /**
     * config.php
     */

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);
    
    
    require("CS50.php");
    CS50::init(__DIR__ . "/../config.json");
    
    // requirements
    require("helpers.php");
    
    // enable sessions
    session_start();

?>
