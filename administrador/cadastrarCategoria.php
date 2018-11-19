<?php
include_once("funcoes.php");
$id = 0;

$resultado = listarCategoriaPorId($id);
$linha = mysqli_fetch_array($resultado);

$nome = $linha['nome'];
$descricao = $linha['descricao'];

?>

<html>
<head>
    <title>Cadastro Categoria</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
     <!-- Custom styles for this template -->
     <link href="../css/sticky-footer-navbar.css" rel="stylesheet">

</head>
<body>
  <?php include_once("header_admin.php"); ?>  
  <main role="main" class="container">
    <br>
    <a class="btn btn-secondary" href="categoria.php">Voltar</a>  
    <h1 style="text-align: center">Cadastro de Categoria</h1>
    <form method="post" action="action/salvarCategoria.php">
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Digite o nome">
      </div>
      <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" name="descricao" placeholder="Insira a descrição">
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