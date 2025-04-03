<?php

require_once __DIR__ .'/lib/database.php';


$db = new DatabaseConnection();

$orders = $db->getConnection()->query('SELECT * FROM  orders')->fetchAll();

var_dump($orders);