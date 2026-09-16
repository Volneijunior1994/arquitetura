<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Novo Produto</h1>
        <form action="index.php?acao=cadastrar" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="preco">Preço (R$):</label>
            <input type="number" id="preco" name="preco" step="0.01" min="0.01" required>

            <button type="submit">Cadastrar</button>
            <a href="index.php?acao=listar">Voltar para a lista</a>
        </form>
    </div>
</body>
</html>