<?php

require_once __DIR__ .'/lib/database.php';
require_once __DIR__ .'/models/Client.php';
require_once __DIR__ .'/models/Order.php';




$db = new DatabaseConnection();

$client = $db->getConnection()->query('SELECT * FROM  client')->fetchAll();
$order = $db->getConnection()->query('SELECT * FROM  orders')->fetchAll();

var_dump($client);
var_dump($order);