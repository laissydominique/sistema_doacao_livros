<?php

session_start();

include_once '../config/database.php';
include_once '../controllers/AuthController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formType = $_POST['form_type'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $tipoUsuario = $_POST['tipo_usuario'];
    $confirmarSenha = $_POST['confirmar_senha'];

    $authController = new AuthController($pdo);

    if($formType === 'cadastro'){
        if($authController->register($nome, $email, $senha, $confirmarSenha)) {
            header('Location: login.php');  
        } else {
            echo "houve um erro ao efetivar o registo, tente novamente mais tarde";
        }
    }

    if ($authController->login($email, $senha)) {
        header('Location: dashboard.php');  
    } else {
        echo "Credenciais inválidas!";
    }
}
