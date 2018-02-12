<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include 'functions.php';




$count = countMovies();

$perPage = 5;
$pageCount = ceil($count['count']/$perPage);
//var_dump($pageCount);die();

$psl = 1;
if (array_key_exists("psl", $_GET)) {
    $psl = $_GET['psl'];
}

$from = $perPage*($psl - 1);

$movies = getMovieList ($from, $perPage);

include 'templates/index.view.php';

?>
