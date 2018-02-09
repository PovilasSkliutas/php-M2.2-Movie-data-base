<?php

// apsirasome funkcija -conectToDatabase - 'prisijungiame prie mysql duomenu bazes'
function connectToDatabase () {
    $userName = 'root';
    $password = 'root';
    $url = 'mysql:host=localhost;dbname=kino-zal';
    $pdo = new PDO($url, $userName, $password);
    // arba galime surasyti i viena eilute
    //$pdo = new PDO('mysql:host=localhost;dbname=kino-zal', 'root', 'root');
    $pdo->exec('SET NAMES UTF8');
    return($pdo);
};

// apsirasome funkcija getMovieList - 'gauname filmu sarasa is duomenu bazes'
function getMovieList () {
    $pdo = connectToDatabase ();

    $query = $pdo->prepare('SELECT * FROM kinofilmai');
    $query->execute();
    $movies = $query->fetchAll(PDO::FETCH_ASSOC);
    return $movies;
};

// pasirasome funkcija - addNewMovie - 'ikelti nauja filma'
function addNewMovie () {
    $pdo = connectToDatabase ();

    $sql = 'INSERT INTO kinofilmai (movieTitle, movieType, year, quality, length, description, image, video)';
    $sql .= ' VALUES ("'.$_POST['movieTitle'].'", "'.$_POST['movieType'].'", "'.$_POST['year'].'", "'.$_POST['quality'].'", "'.$_POST['length'].'", "'.$_POST['description'].'", "'.$_POST['image'].'", "'.$_POST['video'].'")';

    $query = $pdo->prepare($sql);
    $query->execute();

    header("Refresh:1; url=index.php?okey=1");
};

// pasirasome funkcija - getOneMovie - kurioje gauname vieno filmo duomenis ir perduodame i update forma
function getOneMovie ($movieNumber) {
    $pdo = connectToDatabase ();

    $sql = "SELECT * FROM kinofilmai WHERE movieNumber = :movieNumber";
    $query = $pdo->prepare($sql);
    $query->execute(['movieNumber' => $movieNumber]);
    $movies = $query->fetch(PDO::FETCH_ASSOC);
    return $movies;
}

// apsirasome funkcija - updateMovie - 'keisti filmo duomenis'
function updateMovie ($movieNumber) {
    $pdo = connectToDatabase ();

    // updatinam duomenis

    $sql = "UPDATE kinofilmai SET movieTitle='".$_POST['movieTitle']."', movieType='".$_POST['movieType']."', year='".$_POST['year']."', quality='".$_POST['quality']."', length='".$_POST['length']."', description='".$_POST['description']."', image='".$_POST['image']."', video='".$_POST['video']."' WHERE movieNumber='$movieNumber'";

    $query = $pdo->prepare($sql);
    $query->execute();
    //var_dump($query);die();
    $query->execute();

    header("Refresh:1; url=index.php?okey=1");

};

// aspirasome funkcija - deleteMovie - 'istrinti filma is saraso'
function deleteMovie ($movieNumber) {
    $pdo = connectToDatabase ();

    $sql = "DELETE FROM kinofilmai WHERE movieNumber = :movieNumber";
    $query = $pdo->prepare($sql);
    $query->execute(['movieNumber' => $movieNumber]);

    header("Refresh:1; url=index.php?okey=1");
};

 ?>
