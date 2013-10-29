<?php

include 'news.class.php';

// Database class (Using PDO)
class Database {

    protected $host = DB_HOST;
    protected $user = DB_USER;
    protected $pass = DB_PASS;
    protected $dbname = DB_NAME;
    protected $dbh;
    protected $error;
    protected $stmt;

    public function __construct() {
        // Set DSN
        $dsn = DB_TYPE . ':host=' . $this->host . ';dbname=' . $this->dbname;
        // Set options
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        // Create a new PDO istance
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        }
        // Catch any errors
        catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }

    public function query($query) {
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = NULL) {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute() {
        return $this->stmt->execute();
    }

    public function resultset() {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single() {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Number of affected rows
    public function rowCount() {
        return $this->stmt->rowCount();
    }

    public function lastInsertId() {
        return $this->dbh->lastInsertId();
    }

    // Transaction methods
    public function beginTransaction() {
        return $this->dbh->beginTransaction();
    }

    public function endTransaction() {
        return $this->dbh->commit();
    }

    public function cancelTransaction() {
        return $this->dbh->rollBack();
    }

    public function debugDumpParams() {
        return $this->stmt->debugDumpParams();
    }

}

// DBNews class (Extends Database class) (Using PDO)

class DBNews extends Database {

    protected $selectQuery = "SELECT * FROM news";
    protected $insertQuery = "INSERT INTO `news` (`Data`, `Titolo`, `Testo`, `Foto`, `DataIns`) VALUES (:data, :titolo, :testo, :foto, :dataIns)";
    protected $updateQuery = "UPDATE news SET Data = :data, Titolo = :titolo, Testo = :testo, Foto = :foto, DataIns = :dataIns WHERE ID = :iD";
    protected $deleteQuery = "DELETE FROM `news` where `IdNews` = :iD";

    // Fetch an array of News objects (defined in news.class.php)
    public function fetchAll() {
        $this->query($this->selectQuery);
        $this->execute();

        return $this->stmt->fetchAll(PDO::FETCH_CLASS, "News");
    }

    public function fetchSome($num = 1) {
        $this->query($this->selectQuery . "LIMIT 0, $num");

        $this->bind(':num', $num);
        try {
            $this->execute();
        }
        // Catch any errors
        catch (PDOException $e) {
            $this->error = $e->getMessage();
        }

        return $this->stmt->fetchAll(PDO::FETCH_CLASS, "News");
    }

    public function insert($news) {
        $this->query($this->insertQuery);

        $this->bind(':data', $news->Data);
        $this->bind(':titolo', $news->Titolo);
        $this->bind(':testo', $news->Testo);
        $this->bind(':foto', $news->Foto);
        $this->bind(':dataIns', date("Y-m-d"));
        try {
            $this->execute();
            return true;
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            return $this->error;
        }
    }

    public function delete($ID) {
        $this->query($this->deleteQuery);

        $this->bind(':iD', $ID);
        try {
            $this->execute();
            return true;
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            return $this->error;
        }
    }

    public function update($news, $ID) {
        $this->query($this->updateQuery);

        $this->bind(':iD', $ID);
        $this->bind(':data', $news->Data);
        $this->bind(':titolo', $news->Titolo);
        $this->bind(':testo', $news->Testo);
        $this->bind(':foto', $news->Foto);
        $this->bind(':dataIns', date("Y-m-d"));
        try {
            $this->execute();
            return true;
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            return $this->error;
        }
    }

}
