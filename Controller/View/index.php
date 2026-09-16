<?php
session_start();
require_once __DIR__ . '/controller/ProdutoController.php';

$controller = new ProdutoController();
$acao = $_GET['acao'] ?? 'listar';

match ($acao) {
    'form' => $controller->exibirFormulario(),
    'cadastrar' => $controller->cadastrar(),
    default => $controller->listar(),
};