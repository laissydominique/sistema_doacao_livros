<?php
include_once '../models/Pedido.php';

class PedidoController {

    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function allPedidosById($id) {
        if(!$id) {
            echo 'ID não encontrado!';
            return;
        }

        $pedidos = new Pedido($this->pdo);
        $pedidos->allRequestedByUserId($id);

        return $pedidos;
    }
}
