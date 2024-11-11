<?php

class User
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db->getConnection();
    }

    public function getUserByUsername($username, $password, $level)
    {
        $query = $this->db->prepare("SELECT * FROM Pengguna.[User] WHERE Username = :username AND Password = :password AND Level = :level");
        $query->bindValue(":username", $username);
        $query->bindValue(":password", $password);
        $query->bindValue(":level", $level);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}