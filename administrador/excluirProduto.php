<?php
include_once("funcoes.php");
$id = $_GET['id'];

$resultado = listarProdutoParaExcluir($id);
$linha = mysqli_fetch_array($resultado);

$nome = $linha['nome'];
$descricao = $linha['descricao'];
$valor = $linha['valor'];
$id_categoria = $linha['nomeCategoria'];
$id_fornecedor = $linha['nomeFornecedor'];
?>

<html>
<head>
    <title>Excluir Produto</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
     <!-- Custom styles for this template -->
     <link href="../css/sticky-footer-navbar.css" rel="stylesheet">

</head>
<body>
  <?php include_once("header_admin.php"); ?>  
  <main role="main" class="container">
    <br>
    <a class="btn btn-secondary" href="produtos.php">Voltar</a>  
    <h1 style="text-align: center">Excluir Produto</h1>
    <form method="post" action="action/excluirProduto.php?id=<?php print $linha['id_produto'];?>">    
      <div class="form-group">
        <label for="Nome"><b>Nome</b></label><br>
        <label name="nome"> <?php echo $nome ?> </label>
      </div>
      <div class="form-group">
        <label for="idade"><b>Descrição</b></label><br>
        <label name="cpf"> <?php echo $descricao ?> </label>
      </div>
      <div class="form-group">
        <label for="dt_nascimento"><b>Valor</b></label><br>
        <label name="dt_nascimento"> <?php echo $valor; ?> </label>
      </div>
      <div class="form-group">
        <label for="dt_nascimento"><b>Categoria</b></label><br>
        <label name="dt_nascimento"> <?php echo $id_categoria; ?> </label>
      </div>
      <div class="form-group">
        <label for="dt_nascimento"><b>Fornecedor</b></label><br>
        <label name="dt_nascimento"> <?php echo $id_fornecedor; ?> </label>
      </div>
      <button type="submit" class="btn btn-primary mb-2">Excluir Produto</button>
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