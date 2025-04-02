<?php 

require_once __DIR__ . '/../lib/database.php';
class OrderRepository{
   
    public DatabaseConnection $connection; 

    public function __construct()
    {
        $this->connection = new DatabaseConnection(); 

    }

    public function getOrders():array
    {
        $statement=$this->connection->getConnection()->query('SELECT * FROM orders'); 
        $result =$statement->fetchAll(); 
        $orders=[]; 
        foreach ($result as $row) {
            $order =new Order(); 
            $order->setId($row['id']); 
            $order->setTitle($row['title']); 
            $order->setStatus($row['status']); 
            $order->setCreatedAt(date_create_from_format(DATE_RSS,$row['created_at'])); 
            $order->setUpdateAt($row['update_at']); 
            # code...
    
        $orders[]=$order; 
        }
        return $orders; 
    }

public function getOrder(int $id): ? Order
{$statement = $this->connection->getConnection()
    ->prepare('SELECT * FROM orders WHERE id =:id'); 
    $statement->execute(['id'=>$id]); 
    $result=$statement->fetch(); 

    if(!$result){
        return NULL;
    }

    $order= new Order(); 
    $order->setId($result['id']); 
    $order->setTitle($result['title']); 
    $order->setStatus($result['status']);
    $order->setCreatedAt($result['created_at']); 
    $order->setUpdateAt($result['update_at']); 


}


}