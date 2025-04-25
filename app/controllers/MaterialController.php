<?php
include_once '../models/Material.php';

class MaterialController {

    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function allMateriais() {
        $material = new Material($this->pdo);
        $materiais = $material->allItems();

        return $materiais;
    }
}
