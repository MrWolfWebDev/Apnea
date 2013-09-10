<?php

// Include Database config
include 'php/dbconnection.php';

// Include Database class
include 'php/db.class.php';
include_once 'php/news.class.php';

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
$newsDB->query('SELECT * FROM news');

$result2 = $newsDB->fetchNews();

foreach ($result2 as $news) {
    var_dump($news);
    echo $news->IdNews . PHP_EOL;
    echo $news->Titolo . PHP_EOL;
}
?>