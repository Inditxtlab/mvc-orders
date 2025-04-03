<?php

require_once __DIR__ . '/controllers/OrderController.php';

require_once __DIR__ . '/controllers/ClientController.php';

$clientController = new ClientController();

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'view':
        $clientController->show($id);
        break;
    case 'create':
        $clientController->create();
        break;
    case 'index':
        $clientController->home();
        break;
    case 'store':
        $clientController->store();
        break;
    case 'edit':
        $clientController->edit($id);
        break;
    case 'update':
        $taskController->update();
        break;
    case 'delete':
        $clientController->delete($id);
        break;
    default:
        $clientController->forbidden();
        break;
}

// require_once __DIR__ .'/lib/database.php';
// require_once __DIR__ .'/models/Client.php';
// require_once __DIR__ .'/models/repositories/ClientRepository.php';
// var_dump("hi");

// $db = new DatabaseConnection();

// $clients = $db->getConnection()->query('SELECT * FROM  client')->fetchAll();

// var_dump($clients);

