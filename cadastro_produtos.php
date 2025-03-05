<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Cadastro de Produto/Serviço </title>
</head>
<body>



    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top pt-1">
        <div class="container">
            <a class="navbar-brand" href="#">FreitasBurguer</a>
            <img src="img/hamburger.png" alt="Logo" height="30" class="me-2">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                        <a class="nav-link" href="apresentacao.php">Apresentação</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro.php">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro_produtos.php">Cadastro de Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listagem_produtos.php">Listagem de Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registro_vendas.php">Registro de Vendas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listagem_pedidos.php">Listagem de Pedidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container pt-5 mt-5">
        <h1 class="h3 mb-3 fw-normal text-center">Cadastro de Produtos</h1>
        <form>
            <div class="mb-3">
                <label for="nomeProduto" class="form-label">Nome do Lanche/Bebida</label>
                <input type="text" class="form-control" id="nomeProduto" placeholder="Digite o nome do produto ou serviço" required>
            </div>

            <div class="mb-3">
                <label for="descricaoProduto" class="form-label">Descrição</label>
                <textarea class="form-control" id="descricaoProduto" rows="4" placeholder="Digite a descrição do produto ou serviço" required></textarea>
            </div>

            <div class="mb-3">
                <label for="precoProduto" class="form-label">Preço</label>
                <input type="number" class="form-control" id="precoProduto" placeholder="Digite o preço" required>
            </div>

            <div class="mb-3">
                <label for="estoqueProduto" class="form-label">Quantidade em Estoque</label>
                <input type="number" class="form-control" id="estoqueProduto" placeholder="Quantidade em estoque" disabled>
            </div>

            <div class="d-flex justify-content-between">
                <a href="" class="btn btn-secondary">Voltar</a>
                <button type="reset" class="btn btn-warning">Limpar</button>
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
