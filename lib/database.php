<?php
class DatabaseConnection{

private ?\PDO $database =null; 

//PDO (PHP Data Objects) est une extension PHP qui permet d'accéder à différentes bases de données de manière sécurisée et unifiée.
public function getConnection(): PDO{


if ($this->database == NULL){
    $host= 'localhost'; 
    $dbname="mvc_orders"; 
    $username= "root";
    $password= ""; 
    $charset= "utf8mb4"; 


$dsn= "mysql:host=$host; dbname=$dbname;charset=$charset"; 
//DSN (Data Source Name) est une chaîne de connexion qui contient les informations nécessaires pour se connecter à la base de données.
$options=[
    PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION, //Active les exceptions en cas d'erreur SQL.
    PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC
]; //Récupère les résultats sous forme de tableau associatif.
try {
    $this->database=NEW PDO($dsn, $username, $password, $options); 
} catch (PDOException $e) {
    die('Erreur de conexion à la bassee de donnees : ' . $e->getMessage()); 
}
}
return $this->database; 
}
}
;