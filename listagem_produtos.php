<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Listagem de Produtos</title>
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
    <h1 class="h3 mb-3 fw-normal text-center">Listagem de Produtos</h1>

        <div class="mb-3">
            <label for="searchProduct" class="form-label">Pesquisar Produto</label>
            <input type="text" class="form-control" id="searchProduct" placeholder="Digite o nome do produto ">
        </div>

        <div class="mb-3">
            <a href="cadastro_produto.html" class="btn btn-success">Adicionar</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Estoque</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>X-Salada</td>
                    <td>R$ 23,50</td>
                    <td>50</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">Editar</a>
                        <a href="" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td>Batata Frita</td>
                    <td>R$ 12,90</td>
                    <td>100</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">Editar</a>
                        <a href="" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td>Coca Cola lata</td>
                    <td>R$ 9,00</td>
                    <td>200</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">Editar</a>
                        <a href="" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
