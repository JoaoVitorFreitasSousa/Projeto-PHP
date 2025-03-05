<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Contato e Suporte </title>
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
        <h2 class="h4 mb-4">Fale Conosco</h2>
        
        <form>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nome" placeholder="Seu nome" required />
                <label for="nome">Nome</label>
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" placeholder="Seu e-mail" required />
                <label for="email">E-mail</label>
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control" id="mensagem" placeholder="Sua mensagem" rows="4" required></textarea>
                <label for="mensagem">Mensagem</label>
            </div>

            <button type="submit" class="btn btn-primary w-100 py-2">Enviar</button>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
