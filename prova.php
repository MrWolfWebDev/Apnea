<?php

// Include Database config
include 'php/dbconnection.php';

// Include Database class
include 'php/db.class.php';
// include_once 'php/news.class.php';

/*
  $database = new Database();

  $database->query('INSERT INTO mytable (FName, LName, Age, Gender) VALUES (:fname, :lname, :age, :gender)');

  $database->bind(':fname', 'John');
  $database->bind(':lname', 'Smith');
  $database->bind(':age', '24');
  $database->bind(':gender', 'male');

  $database->execute();

  echo $database->lastInsertId();
  echo '<br>';


  $database->query('SELECT * FROM mytable');
  $result = $database->resultset();
  foreach ($result as $row) {
  $id = $row['ID'];
  echo $id . '<br>';
  }
 */

$newsDB = new DBNews();
$currdate = date("Y-m-d");
$array = [
    "IdNews" => 0,
    "Data" => "2008-12-12",
    "Titolo" => "Ciao a tutti",
    "Testo" => "Testo aggiunto, nuova news",
    "Foto" => "img/news/ciao.jpg",
    "DataIns" => $currdate,
];

$news = new News();
$news->fromArray($array);
$newsDB->insert($news);

$newsDB->delete(26);

$result1 = $newsDB->fetchAll();

foreach ($result1 as $news) {
    echo $news->IdNews . PHP_EOL;
    echo $news->Titolo . PHP_EOL;
    echo '<br/>';
}

$result2 = $newsDB->fetchSome(2);

foreach ($result2 as $news) {

    echo $news->toString();

    echo '<br/>';
}

echo date("Y-m-d");
?>