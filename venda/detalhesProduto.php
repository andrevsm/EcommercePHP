<?php
include_once("../administrador/funcoes.php");
$id = $_GET['id'];

$resultado = listarProdutoPorId($id);
$linha = mysqli_fetch_array($resultado);

$nome = $linha['nome'];
$descricao = $linha['descricao'];
$valor = $linha['valor'];
$id_categoria = $linha['id_categoria'];
$id_fornecedor = $linha['id_fornecedor'];
?>

<html>
<head>
    <title>Editar Produto</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
     <!-- Custom styles for this template -->
     <link href="../css/sticky-footer-navbar.css" rel="stylesheet">
</head>
<body>
  <?php include_once("header.php"); ?>  
  <main role="main" class="container">
    <br>
    <a class="btn btn-secondary" href="../index.php">Voltar</a>  
    <h1 style="text-align: center">Produto: <?php echo $nome ?></h1>
    <div class="form-group">
        <label for="Nome">Nome</label>
        <input type="text" class="form-control" name="nome" disabled="true" value="<?php echo $nome ?>">
      </div>
      <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" name="descricao" disabled="true" value="<?php echo $descricao ?>">
      </div>
      <div class="form-group">
        <label for="valor">Valor</label>
        <input type="text" class="form-control" name="valor" disabled="true" value="<?php echo $valor ?>">
      </div>
      <div class="form-group">
        <label for="categoria">Categoria</label><br>
        <?php
          $resultado = listarCategoriaPorId($id_categoria);
          $linha = mysqli_fetch_array($resultado);
        ?>
        <input type="text" class="form-control" name="valor" disabled="true" value="<?php echo $linha['nome'] ?>">
      </div>
      <div class="form-group">
        <label for="fornecedor">Fornecedor</label><br>
        <?php
          $resultado = listarFornecedorPorId($id_fornecedor);
          $linha = mysqli_fetch_array($resultado);
        ?>
        <input type="text" class="form-control" name="valor" disabled="true" value="<?php echo $linha['nome'] ?>">
      </div>
      <br>
      <a class="btn btn-success mb-2" href="action/adicionarItem.php?&id=<?=$id?>">Adicionar ao carrinho</a> 
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