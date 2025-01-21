<?php
class Database{
    private $connection;

    public function __construct(){
        $connectionString = "mysql:host=localhost;dbname=crud;port=3306";

        try {
            $this->connection = new PDO($connectionString, "root", "", [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function query($sql, $params = []){
        try {
            $statement = $this->connection->prepare($sql);
            $statement->execute($params);
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }

        return $this;
    }
}
?>