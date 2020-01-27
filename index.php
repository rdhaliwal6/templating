<?php
session_start();

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require autoload file
require("vendor/autoload.php");

// Instantiate F3
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function () {
    echo "<h1> My Pets <br></h1>";
    echo "<a href='order'>Order a Pet</a>";
    //$views = new Template();
    //echo $views->render("views/home.html");
});

// Run F3
$f3->run();