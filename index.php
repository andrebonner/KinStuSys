<?php

// Login
// View Students
// Add Students
// Update Students
// Delete Students

// for debug purposes
ini_set('display_errors', 'On');

// configuration file
require 'config.php';

// configuration files
/* 
require 'config/paths.php';
require 'config/database.php';
require 'config/constants.php';
*/

// Use an autoloader
include LIBS.'Boot.php';
include 'controllers/Controller.php';
include 'views/View.php';
include 'models/Model.php';


// required library
include LIBS.'Database.php';
include LIBS.'Session.php';
include LIBS.'Hash.php';

// define new bootstrap object
$var = new Boot;

?>