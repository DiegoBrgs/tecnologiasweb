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
                        <li><a class="dropdown-item" href="perfil.php"> Ver perfil </a></li>
                        <li><a class="dropdown-item" href="pagamento.php"> Formas de pagamentos </a></li>
                        <li><a class="dropdown-item" href="sair.php"> Sair </a></li>
                    </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="mt-3 row">

        <div class="card col m-5" style="width:300px">
            <img class="card-img-top" src="bootstrap/img/authentic.png" alt="Card image" style="width:50%">
        <div class="card-body">
        <h4 class="card-title"> Authentic Games </h4>
        <p class="card-text"> Um boneco do melhor youtuber de minecraft, seu filho vai amar!!! </p>
        <a href="lucro.php" class="btn btn-primary"> 240,99$ </a>
        </div>
        </div>

        <div class="card col m-5" style="width:300px">
            <img class="card-img-top" src="bootstrap/img/produto1.png" alt="Card image" style="width:50%">
        <div class="card-body">
        <h4 class="card-title"> Authentic Games </h4>
        <p class="card-text"> Um boneco do melhor youtuber de minecraft, seu filho vai amar!!! </p>
        <a href="lucro.php" class="btn btn-primary"> 240,99$ </a>
        </div>
        </div>

        <div class="card col m-5" style="width:300px">
            <img class="card-img-top" src="bootstrap/img/produto2.png" alt="Card image" style="width:50%">
        <div class="card-body">
        <h4 class="card-title"> Authentic Games </h4>
        <p class="card-text"> Um boneco do melhor youtuber de minecraft, seu filho vai amar!!! </p>
        <a href="lucro.php" class="btn btn-primary"> 240,99$ </a>
        </div>
        </div>

        <div class="card col m-5" style="width:300px">
            <img class="card-img-top" src="bootstrap/img/produto3.png" alt="Card image" style="width:50%">
        <div class="card-body">
        <h4 class="card-title"> Mike (TazerCraft) </h4>
        <p class="card-text"> Um boneco do melhor youtuber de minecraft, seu filho vai amar!!! </p>
        <a href="lucro.php" class="btn btn-primary"> 240,99$ </a>
        </div>
        </div>
        
    </div>
    
    

    </body>
</html>