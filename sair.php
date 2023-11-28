<html>
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
                <a class="nav-link" href="index.php" > Inicio </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="promo.php"> Promoções</a>
                </li>
                
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"> Perfil </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="register.php"> Registrar </a></li>
                <li><a class="dropdown-item" href="vendedor.php"> Revendedores </a></li>
                <li><a class="dropdown-item" href="sair.php"> Sair </a></li>
                </ul>
            </div>
        </nav>
    
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong> Você saiu da sua conta! </strong> Para continuar usando o site faça login ou <a href="register.php"> registre-se </a>
        </div>
        <div class="container mt-7">
        <form action="index.php" class="was-validated" >

        <div class="mb-3 form">
          <label for="email"> Email: </label>
          <input type="email" class="form-control" id="email" placeholder="Coloque seu email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="nome"> Nome: </label>
            <input type="text" class="form-control" placeholder="Coloque seu primeiro nome" name="nome" required>
        </div>

        <div class="mb-3">
          <label for="senha"> Senha: </label>
          <input type="password" class="form-control" id="senha" placeholder="Coloque sua senha" name="senha" required>
        </div>

        <button type="submit" class="btn btn-primary"> Submit </button>
      </form>
    </div>
</html>