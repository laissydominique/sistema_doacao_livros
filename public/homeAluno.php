<?php 
require '../app/controllers/PedidoController.php';
require '../app/models/MaterialController.php';
require '../app/enums/StatusPedidoEnum.php';

    $aluno = $_SESSION['usuario']['nome'];
    $alunoId = $_SESSION['usuario']['id'];
    $pedidoController = new PedidoController($pdo);
    $materialController = new MaterialController($pdo);
    $pedidos = $pedidoController->allPedidosById($id);
    $materiais = $materialController->allMateriais();
    $status = new StatusPedido;
?>

<div>
    <div>Bem vindo(a) <?php $aluno ?></div>
</div>

<div> 
    <h4>Faça um pedido</h4>
    <div>
        <div><h3>Material desejado</h3></div>
        <select>
            <option value="" ></option>
            <?php foreach ($materiais as $material): ?>
                <option value="" ><?php  $material->nome ?></option>

            <?php endforeach; ?>
    </select>
    </div>
</div>

<div>
    <?php if(!empty($produtos)) { ?>
    <div>
        <h2>Veja a sua lista de pedidos</h2>
    </div>
    <div>
    <?php foreach ($pedidos as $pedido): ?>
    <li>
        Pedido #<?= $pedido['id'] ?> -
        Status: <?= StatusPedido::from($pedido['status'])->name ?>
    </li>
    <?php endforeach; ?>
    </div>
    <?php } else {?>
        <h5>Nenhum pedido foi feito ainda.</h5>
     <?php } ?>
</div>