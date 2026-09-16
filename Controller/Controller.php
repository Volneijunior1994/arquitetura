<?php
require_once __DIR__ . '/../model/Produto.php';

class ProdutoController {
    public function listar(): void {
        $produtos = Produto::listarTodos();
        require __DIR__ . '/../view/lista_produtos.php';
    }

    public function exibirFormulario(): void {
        require __DIR__ . '/../view/form_produto.php';
    }

    public function cadastrar(): void {
        $nome = trim($_POST['nome'] ?? '');
        $preco = (float) ($_POST['preco'] ?? 0);

        if ($nome !== '' && $preco > 0) {
            $produto = new Produto($nome, $preco);
            Produto::salvar($produto);
        }

        header('Location: index.php?acao=listar');
        exit;
    }
}