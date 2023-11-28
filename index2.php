<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Trabalho booststrap</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <!-- Código da Barra de Navegação -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item"> 
                            <a href="index.php">
                                <img src="bootstrap/img/avatar.jpg" a alt="Avatar Logo" style="width:40px;" class="rounded-pill">
                            </a>
                        <li class="nav-item">
                        <a class="nav-link" href="index.php"> Inicio </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="promo.php"> Promoções</a>
                        </li>  
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"> Perfil </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="register.php"> Registrar </a></li>
                            <li><a class="dropdown-item" href="pagamento.php"> Formas de pagamentos </a></li>
                            <li><a class="dropdown-item" href="sair.php"> Sair </a></li>
                        </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong> Compra Aprovada!</strong> Você acabou de efetuar uma compra em nosso site!
        </div>
        <h3> Sua Compra acabou de ser realizada com sucesso!!</h3>
        <p> Para voltar comprar mais clique no link abaixo </p> <a href="index.php"> Clique aqui para voltar as compras </a>

        

    </body>
</html>