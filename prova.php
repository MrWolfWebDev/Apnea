<?php

// Include Database config
include 'php/dbconnection.php';

// Include Database class
include 'php/db.class.php';

$newsDB = new DBNews();
$array = [
    "IdNews" => 0,
    "Data" => "2008-12-12",
    "Titolo" => "Ciao a tutti",
    "Testo" => "Testo modificato, vecchia news",
    "Foto" => "img/news/ciao.jpg",
    "DataIns" => date("Y-m-d"),
];

$news = new News();
$news->fromArray($array);
// $newsDB->insert($news);
$newsDB->update($news, 40);

$newsDB->delete(37);

$result1 = $newsDB->fetchAll();

foreach ($result1 as $news) {
    echo $news->toString();
    echo '<br/>';
}

$result2 = $newsDB->fetchSome(2);

foreach ($result2 as $news) {

    echo $news->toString();

    echo '<br/>';
}

echo date("Y-m-d");
?>