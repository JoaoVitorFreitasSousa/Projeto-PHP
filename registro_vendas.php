<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Registro de Vendas </title>
</head>
<body>

   

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top pt-4">
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
    <h1 class="h3 mb-3 fw-normal text-center">Registro de vendas</h1>

        <form>
            <div class="mb-3">
                <label for="cliente" class="form-label">Cliente</label>
                <input type="text" class="form-control" id="cliente" placeholder="Nome do Cliente" required />
            </div>

            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" placeholder="CPF do Cliente" required />
            </div>

            <div class="mb-3">
                <label for="produto" class="form-label">Produto</label>
                <select class="form-select" id="produto" required>
                    <option value="" disabled selected>Selecione um Produto</option>
                    <option value="hamburguer">Hambúrguer Clássico</option>
                    <option value="batata_frita">Batata Frita</option>
                    <option value="refrigerante">Refrigerante</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="number" class="form-control" id="quantidade" placeholder="Quantidade de Produtos" required />
            </div>

            <div class="mb-3">
                <label for="dataVenda" class="form-label">Data da Venda</label>
                <input type="date" class="form-control" id="dataVenda" required />
            </div>

            <div class="mb-3">
                <label for="pagamento" class="form-label">Forma de Pagamento</label>
                <select class="form-select" id="pagamento" required>
                    <option value="" disabled selected>Selecione a Forma de Pagamento</option>
                    <option value="dinheiro">Dinheiro</option>
                    <option value="cartao">Cartão</option>
                    <option value="pix">Pix</option>
                </select>
            </div>

            <div class="d-flex justify-content-between">
                <a href="" class="btn btn-secondary">Voltar</a>
                <button type="reset" class="btn btn-warning">Limpar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
