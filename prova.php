<?php

// Include Database class
include 'php/db.class.php';

$newsDB = new TableNews();
$array = [
    "ID" => 0,
    "Data" => "2008-12-12",
    "Titolo" => "Ciao a tutti",
    "Testo" => "Prova di modifica",
    "Foto" => "img/news/ciao.jpg",
    "DataIns" => date( "Y-m-d" ),
];

$news = new News();
$news->fromArray( $array );
$newsDB->insert( $array );
$newsDB->update( $news, 44 );

$newsDB->delete( 37 );

$result1 = $newsDB->fetchAll();

foreach ( $result1 as $news ) {
    echo $news;
    echo '<br/>';
}

$result2 = $newsDB->fetchSome( 2 );

foreach ( $result2 as $news ) {

    echo $news;

    echo '<br/>';
}

echo date( "Y-m-d" );

echo '<br/>';

echo $newsDB->lastInsertId();
