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

    <div class="container mt-3">
      <h2> Meus Produtos </h2>
      <p> Total: 240,99 </p>
      <form action="index2.php" class="was-validated" >
        <div class="mb-3 mt-3 row">
          <div class="col">
            <label for="nome"> Nome: </label>
            <input type="text" class="form-control" placeholder="Coloque seu primeiro nome" name="nome" required>
          </div>
          <div class="col">
            <label for="nome2"> Sobrenome: </label>
            <input type="text" class="form-control" placeholder="Coloque seu sobrenome" name="nome2" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="cpf"> CPF:</label>
          <input type="text" class="form-control" id="CPF" placeholder="Coloque CPF" name="cpf" required>
        </div> <br> <br>

        <h3> Informações de entrega: </h3>

        <div class="mb-3">
          <label for="end"> Endereço: </label>
          <input type="text" class="form-control" id="end" placeholder="Coloque seu endereço" name="end" required>
        </div>
        
        <div class="mb-3 mt-3 row">
          <div class="col">
            <label for="pais"> País: </label>
            <select name="pais" id="pais" class="form-control">
              <option value="as"> África do Sul </option>
              <option value="al"> Alemanha       </option>
              <option value="au"> Áustria        </option>
              <option value="bg"> Bélgica        </option>
              <option value="br"> Brasil         </option>
              <option value="cn"> Canadá         </option>
              <option value="fr"> França         </option>
              <option value="jm"> Jamaica        </option>
              <option value="mx"> México         </option>
              <option value="sc"> Suíça          </option>
            </select>
          </div>
          <div class="col">
            <label for="Estado"> Estado: </label>
            <input type="text" class="form-control" id="est" placeholder="Coloque seu estado" name="est" required>
          </div>
          <div class="col">
            <label for="cep"> CEP: </label>
            <input type="number" class="form-control" id="cep" placeholder="Coloque seu CEP" name="cep" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="end"> Endereço:</label>
          <input type="text" class="form-control" id="end" placeholder="Coloque seu endereço" name="end" required>
        </div> <br> <br>
      
        <h3> Informações de Pagamento</h3>

        <div class="mb-3">
          <label for="cart"> Número do Cartão </label>
          <input type="text" class="form-control" id="dtn" placeholder="Coloque as informações do cartão" name="cart" required>
        </div>

        <div class="mb-3 row">
          <div class="col">
            <label for="cvv"> CVV </label>
            <input type="text" class="form-control" id="cvv" placeholder="Coloque as informações do cartão" name="cvv" required>
          </div>
          <div class="col">
            <label for="dt"> Date de Vencimento </label>
            <input type="text" class="form-control" id="dt" placeholder="Coloque as informações do cartão" name="dt" required>
          </div>
        </div>

        <button type="submit" class="btn btn-primary"> Submit</button>
      </form>
    </div>
  </body>
</html>