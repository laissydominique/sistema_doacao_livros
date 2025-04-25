<?php

session_start();

include_once '../config/database.php';
include_once '../controllers/AuthController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $authController = new AuthController($pdo);

    if ($authController->login($email, $senha)) {
        header('Location: dashboard.php');  
    } else {
        echo "Credenciais inválidas!";
    }
}
