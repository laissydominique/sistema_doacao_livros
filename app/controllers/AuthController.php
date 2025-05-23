
<?php
include_once '../models/Usuario.php';

class AuthController {

    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function login($email, $senha) {
        $usuario = new Usuario($this->pdo);
        $usuarioAutenticado = $usuario->findByEmailAndPassword($email, $senha);

        if ($usuarioAutenticado) {
            $_SESSION['usuario'] = $usuarioAutenticado;  
            return true;
        }
        return false;
    }

    public function register($nome, $email, $senha, $confirmarSenha) {
        if(!$nome || !$email || !$senha || $confirmarSenha ) {
            echo 'Preencha todos os campos corretamente';
            return false;
        }
        if($senha !== $confirmarSenha) {
            echo 'As senhas precisam ser idênticas';
            return false;
        }
        $usuario = new Usuario($this->pdo);
        $usuario->create($nome, $email, $senha); 
        return true; 
    }
}
