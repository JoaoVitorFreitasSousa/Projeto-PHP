<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Cadastro </title>
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top pt-1">
    <div class="container">
        <a class="navbar-brand" href="">FreitasBurguer</a>
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

<main class="w-100 m-auto form-container-cadastro py-5">
    <form>
        <h1 class="h3 mb-3 fw-normal text-center">Cadastro de Usuário</h1>

       
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nomeCompleto" placeholder="Nome Completo" required />
            <label for="nomeCompleto">Nome Completo</label>
        </div>

        
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="cpf" placeholder="CPF" required />
            <label for="cpf">CPF</label>
        </div>

       
        <div class="form-floating mb-3">
            <input type="date" class="form-control" id="dataNascimento" required />
            <label for="dataNascimento">Data de Nascimento</label>
        </div>

        
        <div class="form-floating mb-3">
            <input type="tel" class="form-control" id="celular" placeholder="Celular" required />
            <label for="celular">Celular</label>
        </div>

        
        <h5 class="mt-3">Endereço</h5>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="rua" placeholder="Rua" required />
            <label for="rua">Rua</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="bairro" placeholder="Bairro" required />
            <label for="bairro">Bairro</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="cidade" placeholder="Cidade" required />
            <label for="cidade">Cidade</label>
        </div>

        <div class="form-floating mb-3">
            <select class="form-select" id="estado" required>
                <option value="" disabled selected>Selecione o Estado</option>
                <option value="SP">São Paulo</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="MG">Espirito Santo</option>
            
                
            </select>
            <label for="estado">Estado</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="cep" placeholder="CEP" required />
            <label for="cep">CEP</label>
        </div>

        
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="email" placeholder="E-mail" required />
            <label for="email">E-mail</label>
        </div>

       
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="senha" placeholder="Senha" required />
            <label for="senha">Senha</label>
        </div>

    
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="confirmaSenha" placeholder="Confirmar Senha" required />
            <label for="confirmaSenha">Confirmar Senha</label>
        </div>

       
        <div class="form-floating mb-3">
            <select class="form-select" id="tipoUsuario" required>
                <option value="" disabled selected>Selecione o Tipo de Usuário</option>
                <option value="admin">Administrador</option>
                <option value="funcionario">Funcionário</option>
                <option value="cliente">Cliente</option>
            </select>
            <label for="tipoUsuario">Tipo de Usuário</label>
        </div>

      
        <button type="submit" class="btn btn-primary w-100 py-2 mt-3">Cadastrar</button>
    </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
