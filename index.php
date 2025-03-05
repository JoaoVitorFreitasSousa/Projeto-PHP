<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>FreitasBurguer</title>
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


 <body class="d-flex align-items-center py-4 bg-body-tertiary ">    
    <main class="w-100 m-auto form-container" >
        <form>
            <img src="img/hamburger.png" class="mb-4" height="57" width="72"/>
            <h1 class="h3 mb-3 fw-normal ">Login </h1>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="your-email@gmail.com" />
                <label for="floaringInput">Email </label> 
            </div>


            <div class="form-floating">
                <input type="password" class="form-control" id="floatingInput" placeholder="password" />
                <label for="floaringInput">Senha </label> 
            </div>

            <div class="text-cente mt-1">
                <a href="" class="small text-decoration-none">Esqueci minha senha</a>
            </div>
            
            <button class="btn btn-primary w-100 py-2"> Entrar </button>

        </form>

    </main> 
        
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>