<?php 

require_once __DIR__ . '/../../lib/database.php';
require_once __DIR__ .'/../Order.php';
class OrderRepository{
   
    public DatabaseConnection $connection; 

    public function __construct()
    {
        $this->connection = new DatabaseConnection(); 

    }

    public function getOrders():array
    {
        $statement=$this->connection->getConnection()->prepare('SELECT * FROM orders'); 
        $statement->execute(); 
        $orders=[]; 
        foreach ($statement as $row) {
            $order =new Order(); 
            $order->setId($row['id']); 
            $order->setTitle($row['title']); 
            $order->setStatus($row['status']); 
            $order->setClientId($row['client_id']); 
            $order->setCreatedAt(date_create_from_format( 'Y-m-d H:i:s',$row['create_at'])); 
            $order->setUpdateAt(date_create_from_format( 'Y-m-d H:i:s',$row['update_at'])); 
    
        $orders[]=$order; 
        }
        return $orders; 
    }
    public function getOrdersByClientId(int $id):array
    {
        $statement=$this->connection->getConnection()->prepare('SELECT * FROM orders WHERE client_id = :id'); 
        $statement->execute(['id'=>$id]); 
        $orders=[]; 
        foreach ($statement as $row) {
            $order =new Order(); 
            $order->setId($row['id']); 
            $order->setTitle($row['title']); 
            $order->setStatus($row['status']); 
            $order->setClientId($row['client_id']); 
            $order->setCreatedAt(date_create_from_format( 'Y-m-d H:i:s',$row['create_at'])); 
            $order->setUpdateAt(date_create_from_format( 'Y-m-d H:i:s',$row['update_at'])); 
    
        $orders[]=$order; 
        }
        return $orders; 
    }

    public function getOrder(int $id): ?Order
    {
        $statement = $this->connection->getConnection()
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
        $order->setClientId($result['client_id']);
        $order->setCreatedAt(date_create_from_format( 'Y-m-d H:i:s',$result['create_at'])); 
        $order->setUpdateAt(date_create_from_format( 'Y-m-d H:i:s',$result['update_at'])); 

        return $order;
    }


    public function create(Order $order): bool
    {
        $statement = $this->connection
                ->getConnection()
                ->prepare('INSERT INTO orders (title, status, client_id) VALUES (:title, :status, :client_id);');

        return $statement->execute([
            'title' => $order->getTitle(),
            'status' => $order->getStatus(),
            'client_id' => $order->getClientId()
        ]);
    }

    public function update(Order $order): bool
    {
        $statement = $this->connection
                ->getConnection()
                ->prepare('UPDATE orders SET title = :title, status = :status, client_id = :clientId WHERE id = :id');

        return $statement->execute([
            'id' => $order->getId(),
            'title' => $order->getTitle(),
            'status' => $order->getStatus(),
            'client_id' => $order->getClientId()
        ]);
    }

    public function delete(int $id): bool
    {
        $statement = $this->connection
                ->getConnection()
                ->prepare('DELETE from orders WHERE id = :id');
        $statement->bindParam(':id',$id);

        return $statement->execute();
    }
}
