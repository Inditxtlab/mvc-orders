<?php
 require_once __DIR__ .'/../../lib/database.php';
 require_once __DIR__ .'/../Client.php';

class ClientRepository{

    public DatabaseConnection $connection;

    public function __construct(){
        $this->connection = new DatabaseConnection();
    }

    public function getClients(): array{

        $statement = $this->connection->getConnection()->prepare('SELECT * FROM client');
        $statement->execute();
        $clients = []; 
        foreach ($statement as $row) {
            $client = new Client();
            $client->setId($row['id']);
            $client->setName($row['name']);
            $client->setEmail($row['email']);
            $client->setTelephone($row['telephone']);
            $client->setDate_creation(date_create_from_format( 'Y-m-d H:i:s',$row['date_creation']));
            $client->setDate_modif(date_create_from_format( 'Y-m-d H:i:s',$row['date_modif']));

            $clients[] = $client;
        }
        return $clients;
    }
    public function getClient(int $id): ?Client
    {

        $statement = $this->connection->getConnection()->prepare('SELECT * FROM client WHERE id=:id');
        $statement->execute(['id'=> $id]);
        $result = $statement->fetch() ;

        if(!$result){
            return null;
        }
        $client = new Client();
        $client->setId($result['id']);
        $client->setName($result['name']);
        $client->setEmail($result['email']);
            $client->setTelephone($result['telephone']);
            $client->setDate_creation(date_create_from_format( 'Y-m-d H:i:s',$result['date_creation']));
            $client->setDate_modif(date_create_from_format( 'Y-m-d H:i:s',$result['date_modif']));

        return $client;
    }

    public function create(Client $client): bool
    {
        $statement = $this->connection
                ->getConnection()
                ->prepare('INSERT INTO  (name, email, telephone) VALUES (:name, :email, :telephone);');

        return $statement->execute([
            'name' => $client->getName(),
            'email' => $client->getEmail(),
            'telephone' => $client->getTelephone()
        ]);
    }

    public function update(Client $client): bool
    {
        $statement = $this->connection
                ->getConnection()
                ->prepare('UPDATE client SET name = :name, email = :email, telephone = :telephone WHERE id = :id');

        return $statement->execute([
            'id' => $client->getId(),
            'name' => $client->getName(),
            'email' => $client->getEmail(),
            'telephone' => $client->getTelephone()
        ]);
    }

    public function delete(int $id): bool
    {
        $statement = $this->connection
                ->getConnection()
                ->prepare('DELETE from client WHERE id = :id');
        $statement->bindParam(':id',$id);

        return $statement->execute();
    }
}