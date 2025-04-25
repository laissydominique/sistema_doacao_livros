<?php

include_once '../config/database.php';

class Usuario {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($nome, $email, $senha) {
        $sql = "INSERT INTO usuarios (nome, email, senha_hash, criado_em) VALUES (:nome, :email, :senha, :hoje)";
        $hoje = date('Y-m-d H:i:s');  
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':nome' => $nome, ':email' => $email, ':senha' => password_hash($senha, PASSWORD_DEFAULT), ':hoje' => $today]);
    }

    public function findByEmailAndPassword($email, $senha) {
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':email' => $email]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($senha, $usuario['senha_hash'])) {
            return $usuario;
        }
        return false;
    }
}