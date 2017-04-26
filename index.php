<?php

require('Controller.php');
require ('Model/Model.php');
require ('Model/Movies.php');
require('database.php');

$config = require('config.php');
$db = new Database($config);


$controller = new Controller($db);
$controller->index();