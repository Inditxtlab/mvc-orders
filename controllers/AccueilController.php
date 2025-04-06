<?php
require_once __DIR__ . '/../models/repositories/ClientRepository.php';
require_once __DIR__ . '/../models/repositories/OrderRepository.php';

class AccueilController{

    private ClientRepository $clientRepository;
    private OrderRepository $orderRepository;

    public function __construct(){
        $this->clientRepository = new ClientRepository();
        $this->orderRepository = new OrderRepository();
    }

    
    public function home()
    {
        $clients = $this->clientRepository->getClients();
        $orders = $this->orderRepository->getOrders();

        require_once __DIR__ . '/../views/home.php';
    }



    
}

?>