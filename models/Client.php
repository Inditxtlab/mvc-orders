<?php

require_once __DIR__ .'/../lib/database.php';

class Client{
    private int $id;
    private string $name;
    private string $email;
    private string $telephone;
    private DateTime $date_creation;
    private DateTime $date_modif;

    public function getId(): int{
        return $this->id;
    }
    public function getName(): string{
        return $this->name;
    }
    public function getEmail(): string{
        return $this->email;
    }
    public function getTelephone(): string{
        return $this->telephone;
    }

    public function getDate_creation(): string{
        return $this->date_creation->format('Y-m-d H:i:s');
    }

    public function getDate_modif(): string{
        return $this->date_modif->format('Y-m-d H:i:s');
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function setName(string $name){
        $this->name = $name;
    }
    public function setEmail(string $email){
        $this->email = $email;
    }
    public function setTelephone(string $telephone){
        $this->telephone = $telephone;
    }

    public function setDate_creation(DateTime $date_creation): void{
        $this->date_creation = $date_creation;
    }

    public function setDate_modif(DateTime $date_modif): void{
        $this->date_modif = $date_modif;
    }

}