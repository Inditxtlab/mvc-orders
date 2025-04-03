<?php
class DatabaseConnection
{
    private ?\PDO $database = null;

    //PDO (PHP Data Objects) est une extension PHP qui permet d'accéder à différentes bases de données de manière sécurisée et unifiée.
    public function getConnection(): PDO
    {

        if ($this->database == null) {
            $host = 'localhost';
            $dbname = 'mvc_orders';
            $username = 'root';
            $password = "";
            $charset = "utf8mb4";


            $dsn = "mysql:host=$host; dbname=$dbname; charset=$charset";

            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];

            try {
                $this->database = new PDO($dsn, $username, $password, $options);
            } catch (PDOException $e) {
                die('Erreur de connexion à la base de donnees :' . $e->getMessage());
            }
        }
        return $this->database;
    }

}