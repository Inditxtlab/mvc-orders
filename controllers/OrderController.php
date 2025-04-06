<?php

require_once __DIR__ . '/../models/repositories/OrderRepository.php';
require_once __DIR__ . '/../models/Order.php';
require_once __DIR__ . '/../models/repositories/ClientRepository.php';


class OrderController
{
    private OrderRepository $orderRepository;
    private ClientRepository $clientRepository;


    public function __construct()
    {
        $this->orderRepository = new OrderRepository();
        $this->clientRepository = new ClientRepository();

    }

    public function list_order()
    {
        $orders = $this->orderRepository->getOrders();

        require_once __DIR__ . '/../views/orders/order-list.php';
    }

    public function show_order(int $id) 
    {
        $order = $this->orderRepository->getOrder($id);
        $client = $this->clientRepository->getClient($order->getClientId());

        require_once __DIR__ . '/../views/orders/order-view.php';
    }

    public function create_order()
    {
        $clients = $this->clientRepository->getClients();
        require_once __DIR__ . '/../views/orders/order-create.php';
    }

    public function store_order()
    {
        var_dump($_POST);
        $order = new Order();
        $order->setTitle($_POST['title']);
        $order->setStatus($_POST['status']);
        $order->setClientId($_POST['client_id']);
        $this->orderRepository->create($order);

        header('Location: ?');
    }

    public function edit_order(int $id)
    {
        $order = $this->orderRepository->getOrder($id);
        require_once __DIR__ . '/../views/orders/order-edit.php';
    }

    public function update_order()
    {
        $order = new Order();
        $order->setId($_POST['id']);
        $order->setTitle($_POST['title']);
        $order->setStatus($_POST['status']);
        $this->orderRepository->update($order);

        header('Location: ?');
    }

    public function delete_order(int $id)
    {
        $this->orderRepository->delete($id);

        header('Location: ?');
    }

    public function forbidden()
    {
        require_once __DIR__ . '/../views/404.php';
        http_response_code(404);
    }
}