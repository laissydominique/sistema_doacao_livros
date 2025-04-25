<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');  
    exit();
} 

if($_SESSION['usuario']['tipo'] === 1) {
    header('Location: homeAluno.php');  
}

echo "Bem-vindo, " . $_SESSION['usuario']['nome'];
