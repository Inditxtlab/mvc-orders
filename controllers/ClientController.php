<?php

require_once __DIR__ . '/../models/repositories/ClientRepository.php';
require_once __DIR__ . '/../models/Client.php';
// require_once __DIR__ . '/../models/repositories/OrderRepository.php';


class ClientController
{
    private ClientRepository $clientRepository;
    private OrderRepository $orderRepository;


    public function __construct()
    {
        $this->clientRepository = new ClientRepository();
        $this->orderRepository = new OrderRepository();

    }

    public function list_client()
    {
        $clients = $this->clientRepository->getClients();

        require_once __DIR__ . '/../views/client/client-list.php';
    }

    public function show_client(int $id) 
    {
        $client = $this->clientRepository->getClient($id);
        $orders = $this->orderRepository->getOrdersByClientId($id);


        require_once __DIR__ . '/../views/client/client-view.php';
    }

    public function create_client()
    {
        require_once __DIR__ . '/../views/client/client-create.php';
    }

    public function store_client()
    {
        $client = new Client();
        $client->setName($_POST['name']);
        $client->setEmail($_POST['email']);
        $client->setTelephone($_POST['telephone']);
        $this->clientRepository->create($client);

        header('Location: ?');
    }

    public function edit_client(int $id)
    {
        $client = $this->clientRepository->getClient($id);
        require_once __DIR__ . '/../views/client/client-edit.php';
    }

    public function update_client()
    {
        $client = new Client();
        $client->setId($_POST['id']);
        $client->setName($_POST['name']);
        $client->setEmail($_POST['email']);
        $client->setTelephone($_POST['telephone'] ?? '');
        $this->clientRepository->update($client);

        header('Location: ?');
    }

    public function delete_client(int $id)
    {
        $this->clientRepository->delete($id);

        header('Location: ?');
    }

    public function forbidden()
    {
        require_once __DIR__ . '/../views/404.php';
        http_response_code(404);
    }
}