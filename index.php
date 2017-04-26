<?php

require('Controller/Controller.php');
require ('Model/Model.php');
require ('Model/Movies.php');
require('Controller/database.php');

$config = require('Controller/config.php');
$db = new Database($config);


$controller = new Controller($db);
$controller->index();