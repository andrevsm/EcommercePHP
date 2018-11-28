<?php
include_once("../administrador/funcoes.php");
$id = $_GET['id'];

$resultado = listarClientePorId($id);
$linha = mysqli_fetch_array($resultado);

$nome = $linha['nome'];
$cpf = $linha['cpf'];
$dt_nascimento = $linha['dt_nascimento'];
$email = $linha['email'];
$senha = $senha['senha'];

?>

<html>
<head>
    <title>Editar Cliente</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
     <!-- Custom styles for this template -->
     <link href="../css/sticky-footer-navbar.css" rel="stylesheet">

</head>
<body>
  <?php include_once("header.php"); ?>  
  <main role="main" class="container">
    <br>
    <a class="btn btn-secondary" href="index.php">Voltar</a>  
    <h1 style="text-align: center">Editar Cliente</h1>
    <form method="post" action="action/salvarCliente.php?id=<?php print $linha['id_cliente'];?>">    
      <div class="form-group">
        <label for="Nome">Nome</label>
        <input type="text" class="form-control" name="nome" value="<?php echo $nome ?>">
      </div>
      <div class="form-group">
        <label for="idade">CPF</label>
        <input type="text" class="form-control" name="cpf" value="<?php echo $cpf ?>">
      </div>
      <div class="form-group">
        <label for="dt_nascimento">Data de Nascimento</label>
        <input type="date" class="form-control" name="dt_nascimento" value="<?php echo $dt_nascimento; ?>">
      </div>
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
      </div>
      <div class="form-group">
        <label for="senha">Senha</label>
        <input type="text" class="form-control" name="senha" value="<?php echo $senha; ?>">
      </div>
      <button type="submit" class="btn btn-primary mb-2">Enviar</button>
    </form>
</main>
  
<footer class="footer">
  <div class="container">
    <span class="text-muted">Sistema Estoque </span>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>