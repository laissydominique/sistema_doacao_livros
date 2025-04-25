<?php

include_once '../config/database.php';

class Pedido {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // public function create($nome, $email, $senha) {
    //     $sql = "INSERT INTO usuarios (nome, email, senha_hash, criado_em) VALUES (:nome, :email, :senha, :hoje)";
    //     $today = date('Y-m-d H:i:s');  
    //     $stmt = $this->pdo->prepare($sql);
    //     $stmt->execute([':nome' => $nome, ':email' => $email, ':senha' => password_hash($senha, PASSWORD_DEFAULT), ':hoje' => $today]);
    // }

    public function allRequestedByUserId($id) {
        $sql = "SELECT * FROM pedidos WHERE usuario_id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':id' => $id]); 
        $pedidos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $pedidos;
    }
}