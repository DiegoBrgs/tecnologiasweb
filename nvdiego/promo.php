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
            </div>
        </nav>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="bootstrap/img/produto2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <div>
      <img src="bootstrap/img/produto3.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="bootstrap/img/produto1.png" class="d-block w-100" alt="">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </body>
</html>