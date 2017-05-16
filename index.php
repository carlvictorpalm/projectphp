<?php

require('controller/Controller.php');
require('model/Model.php');
require('model/Movie.php');
require('model/Database.php');

$config = require('config/config.php');
$db = new Database($config);

$controller = new Controller($db);
$controller->index();