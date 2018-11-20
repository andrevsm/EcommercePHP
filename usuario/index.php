<html>
<head>
    <title>Sistema Estoque</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <link href="../css/sticky-footer-navbar.css" rel="stylesheet">
</head>
<body>
  <?php 
  if(!isset($_SESSION)) { 
    session_start(); 
  } 
  if(empty($_SESSION['cliente'])){ 
    ?>  
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="../index.php">Sistema Estoque</a>
  </nav>
  <div class="container">
    <form method="post" action="action/login.php" class="container col-5">
      <br>
      <br>
      <h2 style="text-align: center">Login do Cliente</h2>
      <br>
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" class="form-control" name="email" placeholder="Digite o e-mail">
      </div>
      <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" name="senha" placeholder="Digite a Senha">
      </div>

      <? if(!empty($_GET)){ ?>
        <h3 style="color: red; text-align: center"><?echo $_GET['message'];?></h3>
        <br>
      <? } ?>
        
      <div style="text-align: center">
        <button type="submit" class="form-control btn btn-success col-4">Continuar</button>
      </div>
    </form>
  </div>
  <?
  } else {
    include_once("header.php");

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    $cliente = $_SESSION['cliente'];
    
  ?>
  <div class="container-fluid">
    <div class="jumbotron text-center">
      <h1 class="display-2">Olá, <?=$cliente['nome']?></h1>
      <p class="lead">O Sistema Estoque agradece sua visita!!!</p>
      <p><a class="btn btn-lg btn-success" href="../index.php" role="button">Confira nossos produtos!</a></p>
    </div>
    <div class="container">
      <div class="card-group mr-auto">

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Meus Dados</h3>  
          </div>
          <div class="card-body">
            <p>Nome: <label><?=$cliente['nome']?></label> </p>
            <p>Cpf: <label><?=$cliente['cpf']?></label> </p>
            <p>Data de Nascimento: <label><?=$cliente['dt_nascimento']?></label> </p>
            <p>E-mail: <label><?=$cliente['email']?></label> </p>
            <a href="editarCliente.php" class="btn btn-primary  w-25">Editar</a>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Últimos Pedidos</h3>  
          </div>
          <div class="card-body">
            <p>Número do pedido: <label>numeros</label></p>
            <p>Produto: <label>nomeDoproduto</label></p>
            <p>Valor total: R$<label>valor</label></p>
            <a href="meusPedidos.php" class="btn btn-primary  w-25">Ver todos</a>
          </div>
        </div>
      </div>  
      <br>  
    </div>
  </div>

  <? }
  ?>
  
<footer class="footer">
  <div class="container">
    <span class="text-muted">Sistema Estoque </span>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</body>
</html>