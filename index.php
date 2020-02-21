<?php
declare(strict_types=1);

//include all your model files here
require 'Model/Post.php';
require 'Model/Guestbook.php';
require 'Model/Converter.php';
//include all your controllers here
require 'Controller/HomepageController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!
$controller = new HomepageController();
$controller->render($_POST);