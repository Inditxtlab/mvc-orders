<?php

require_once __DIR__ . '/controllers/AccueilController.php';
require_once __DIR__ . '/controllers/OrderController.php';
require_once __DIR__ . '/controllers/ClientController.php';

$clientController = new ClientController();
$orderController = new OrderController();
$accueilController = new AccueilController();

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'list_client':
        $clientController->list_client();
        break;
    case 'list_order':
        $orderController->list_order();
        break;
    case 'view_client':
        $clientController->show_client($id);
        break;
    case 'create_client':
        $clientController->create_client();
        break;
    case 'view_order':
        $orderController->show_order($id);
        break;
    case 'create_order':
        $orderController->create_order();
        break;
    case 'index':
        $accueilController->home();
        break;
    case 'store_client':
        $clientController->store_client();
        break;
    case 'edit_client':
        $clientController->edit_client($id);
        break;
    case 'update_client':
        $clientController->update_client();
        break;
    case 'delete_client':
        $clientController->delete_client($id);
        break;
    case 'store_order':
        $orderController->store_order();
        break;
    case 'edit_order':
        $orderController->edit_order($id);
        break;
    case 'update_order':
        $orderController->update_order();
        break;
    case 'delete_order':
        $orderController->delete_order($id);
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

