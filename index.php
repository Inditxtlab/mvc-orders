<?php

require_once __DIR__ .'/lib/database.php';

require_once __DIR__ .'/repositories/OrderRepository.php'; 


require_once __DIR__ . '/models/Order.php'; 

var_dump("salut"); 
// $db = new DatabaseConnection();

$client = $db->getConnection()->query('SELECT name FROM client')->fetchAll();

var_dump($client);

$ordeRepo = new OrderRepository(); 

var_dump($ordeRepo); 
