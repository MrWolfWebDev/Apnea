<?php

// Include Database config
include 'php/dbconnection.php';

// Include Database class
include 'php/db.class.php';


$database = new Database();

$database->query('INSERT INTO mytable (FName, LName, Age, Gender) VALUES (:fname, :lname, :age, :gender)');

$database->bind(':fname', 'John');
$database->bind(':lname', 'Smith');
$database->bind(':age', '24');
$database->bind(':gender', 'male');

$database->execute();

echo $database->lastInsertId();
echo $database->resultset();
?>