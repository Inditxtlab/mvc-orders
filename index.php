<?php

require_once __DIR__ .'/lib/database.php';
require_once __DIR__ .'/models/Client.php';
// require_once __DIR__ .'/models/repositories/ClientRepository.php';
// var_dump("hi");

$db = new DatabaseConnection();

$clients = $db->getConnection()->query('SELECT * FROM  client')->fetchAll();

var_dump($clients);