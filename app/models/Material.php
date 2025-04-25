<?php

include_once '../config/database.php';

class Material {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function allItems() {
        $sql = "SELECT * FROM materiais";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(); 
        $materiais = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $materiais;
    }
}