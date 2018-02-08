<?php

// irasome naujo filmo duomenis
$pdo = new PDO('mysql:host=localhost;dbname=kino-zal', 'root', 'root');
$pdo->exec('SET NAMES UTF8');

$sql = 'INSERT INTO kinofilmai (movieTitle, movieType, year, quality, length, description, image, video)';
$sql .= ' VALUES ("'.$_POST['movieTitle'].'", "'.$_POST['movieType'].'", "'.$_POST['year'].'", "'.$_POST['quality'].'", "'.$_POST['length'].'", "'.$_POST['description'].'", "'.$_POST['image'].'", "'.$_POST['video'].'")';

$query = $pdo->prepare($sql);
$query->execute();

header("Refresh:1; url=index.php?okey=1");

 ?>
