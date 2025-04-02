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




}