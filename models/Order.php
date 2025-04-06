<?php 

require_once __DIR__ . '/../lib/database.php';

class Order{
    private int $id; 
    private $title; 
    private $status; 
    private int $clientId;
    private DateTime $createdAt; 
    private DateTime $updatedAt; 

public function getId():int
{
    return $this->id; 

}
public function getTitle(): string
{
    return $this->title; 

}

public function getStatus(): string{
    return $this->status; 
}

public function getClientId():int
{
    return $this->clientId; 

}
public function getCreatedAt(): string
{
    return $this->createdAt->format('Y-m-d H:i:s');
}

public function getUpdateAt(): string
{
    return $this->updatedAt->format('Y-m-d H:i:s'); 
}

public function setId(int $id): void
{
    $this->id = $id; 
}

public function setClientId(int $clientId): void
{
    $this->clientId = $clientId; 
}
public function setTitle(string $title): void
{
    $this->title= htmlspecialchars($title); 
}

public function setStatus(string $status): void
{
    $this->status = htmlspecialchars($status);
}
public function setCreatedAt(Datetime $createdAt): void
{
    $this->createdAt = $createdAt; 
}
public function setUpdateAt(Datetime $updatedAt): void
{
    $this->updatedAt=$updatedAt; 
}

}