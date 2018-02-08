<?php

// kliento duomenu redagavimas
if(isset($_GET['movieNumber'])) {
    $query = $pdo->prepare
    (
        'SELECT movieTitle, movieType, year, quality, length, description, image, video FROM kinofilmai WHERE movieNumber = ?'
    );
    $query->execute(array($_GET['movieNumber']));
    $edit_movie = $query->fetch(PDO::FETCH_ASSOC);
}


// updatinam duomenis
$pdo = new PDO('mysql:host=localhost;dbname=kino-zal', 'root', 'root');
$pdo->exec('SET NAMES UTF8');

$sql = "UPDATE kinofilmai SET movieTitle='".$_POST['movieTitle']."', movieType='".$_POST['movieType']."', year='".$_POST['year']."', quality='".$_POST['quality']."', length='".$_POST['length']."', description='".$_POST['description']."', image='".$_POST['image']."', video='".$_POST['video']."' WHERE movieNumber = ?";

$query = $pdo->prepare($sql);
$query->execute(array($_POST['movieNumber']));

header("Refresh:1; url=index.php?okey=1");

?>
