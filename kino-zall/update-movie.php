<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'functions.php';

$movieNumber = $_GET['id'];

$edit_movie = getOneMovie ($movieNumber);

include 'templates/update-movie.view.php';

 ?>
