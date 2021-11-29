<?php 
    include("conexao.php") ;
    try{
        $sql = "insert into tblclientes (cliente,email) values(:cliente,:email)";
        $stmt = $con->prepare($sql);
        $stmt->bindValue(":cliente",$_POST["cliente"]);
        $stmt->bindValue(":email", $_POST["email"]);
        $stmt->execute();

    } catch(PDOException $e){
        echo "Não Cadastrou. ".$e->getCode();

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
            <!--  Início Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Menu Principal</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="fmrclientes.php">Clientes</a>
                      </li>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="produtos.php">Produtos</a>
                      </li>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="vendedores.php">Vendedores</a>
                      </li>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="vendas.php">Vendas</a>
                      </li>
                      <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Cadastrar
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Cadastrar Clientes</a></li>
                          <li><a class="dropdown-item" href="#">Cadastrar Produtos</a></li>
                          <li><a class="dropdown-item" href="#">Cadastrar Vendedores</a></li>
                          <li><a class="dropdown-item" href="#">Cadastrar Vendas</a></li>
                        </ul>
                      </li> -->
                      <!-- <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                      </li> -->
                    </ul>
                    <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                  </div>
                </div>
              </nav>
            
            <!-- Fim Navbar-->
    
    <!-- método de envio são 2:
    * method="GET" - Envia sem segurança pois exibe os dados na url - mais rápido
    * method="POST" - Oculta os dados da url, mas é mais lento 
    -->
    <div class="container">
    <h1>Cadastro de Clientes</h1>
    <form method="post">
    <div class="row">
    <label class="form-label">Cliente</label><input type="text" name="cliente" class="form-control"><br>
    </div>
    <br>
    <div class="row">
    <label class="form-label">Email</label><input type="email" name="email" class="form-control" id="exampleInputEmail1"><br>
    </div>
    <br>
    <br>
    <div class="row">
    <input type="submit" value="Cadastrar" type="submit" class="btn btn-primary">
    </div>
    </form>
    </div>
    
</body>
</html>
