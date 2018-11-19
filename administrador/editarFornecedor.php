<?php
include_once("funcoes.php");
$id = $_GET['id'];

$resultado = listarFornecedorPorId($id);
$linha = mysqli_fetch_array($resultado);

$nome = $linha['nome'];
$cnpj = $linha['cnpj'];
$endereco = $linha['endereco'];
$complemento = $linha['complemento'];
$cidade = $linha['cidade'];
$estado = $linha['estado'];
$cep = $linha['cep'];

?>

<html>
<head>
    <title>Editar Fornecedor</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
     <!-- Custom styles for this template -->
     <link href="../css/sticky-footer-navbar.css" rel="stylesheet">

</head>
<body>
  <?php include_once("header_admin.php"); ?>  
  <main role="main" class="container">
    <br>
    <a class="btn btn-secondary" href="fornecedores.php">Voltar</a>  
    <h1 style="text-align: center">Editar Fornecedor</h1>
    <form method="post" action="action/salvarFornecedor.php?id=<?php print $linha['id_fornecedor'];?>">
      <div class="form-group">
        <label for="Nome">Nome</label>
        <input type="text" class="form-control" name="nome" value="<?php echo $nome ?>">
      </div>
      <div class="form-group">
        <label for="idade">CNPJ</label>
        <input type="text" class="form-control" name="cnpj" value="<?php echo $cnpj ?>">
      </div>
      <div class="form-group">
        <label for="endereco">Endereço</label>
        <input type="text" class="form-control" name="endereco" value="<?php echo $endereco; ?>">
      </div>
      <div class="form-group">
        <label for="complemento">Complemento</label>
        <input type="text" class="form-control" name="complemento" value="<?php echo $complemento; ?>">
      </div>
      <div class="form-group">
        <label for="cidade">Cidade</label>
        <input type="text" class="form-control" name="cidade" value="<?php echo $cidade; ?>">
      </div>
      <div class="form-group">
        <label for="estado">Estado</label>
        <input type="text" class="form-control" name="estado" value="<?php echo $estado; ?>">
      </div>
      <div class="form-group">
        <label for="cep">CEP</label>
        <input type="text" class="form-control" name="cep" value="<?php echo $cep; ?>">
      </div>
      <button type="submit" class="btn btn-primary mb-2">Enviar</button>
    </form>
</main>
<br>  
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