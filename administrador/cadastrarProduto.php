<?php
include_once("funcoes.php");
$id = 0;

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
    <title>Cadastro Cliente</title>
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
    <h1 style="text-align: center">Cadastro de Produto</h1>
    <form method="post" action="action/salvarProduto.php">
      <div class="form-group">
        <label for="Nome">Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Digite o nome">
      </div>
      <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" name="descricao" placeholder="Descrição do produto">
      </div>
      <div class="form-group">
        <label for="valor">Valor</label>
        <input type="text" class="form-control" name="valor" placeholder="Valor do produto">
      </div>
      <div class="form-group">
        <label for="categoria">Categoria</label><br>
        <?php
          $conexao = mysqli_connect("localhost","root") or die( "Não foi possível conectar ao banco MySQL");
          mysqli_select_db($conexao,"estoque") or die('Erro de acesso ao banco de dados');
          $queryCategoria = "SELECT id_categoria, nome FROM categoria ORDER BY id_categoria;";
          $resultado = mysqli_query($conexao,$queryCategoria) or die('Erro de query ' . mysqli_error($conexao));
        ?>
        <select style="form-control" name="id_categoria">
        <?  
          while ($linha = mysqli_fetch_array($resultado)) {
        ?>
            <option name="id_categoria" style="form-control" value="<? echo $linha['id_categoria'] ?>">
                <? echo $linha['nome']?>
            </option>
        <?
        }
        mysqli_close($conexao);
        ?>
        </select>
      </div>
      <div class="form-group">
        <label for="fornecedor">Fornecedor</label><br>
        <?php
          $conexao = mysqli_connect("localhost","root") or die( "Não foi possível conectar ao banco MySQL");
          mysqli_select_db($conexao,"estoque") or die('Erro de acesso ao banco de dados');
          $queryFornecedor = "SELECT id_fornecedor, nome FROM fornecedor ORDER BY id_fornecedor;";
          $resultado = mysqli_query($conexao,$queryFornecedor) or die('Erro de query ' . mysqli_error($conexao));
        ?>
        <select style="form-control" name="id_fornecedor">
        <?  
          while ($linha = mysqli_fetch_array($resultado)) {
        ?>
            <option name="id_fornecedor" style="form-control" value="<? echo $linha['id_fornecedor'] ?>">
                <? echo $linha['nome']?>
            </option>
        <?
        }
        mysqli_close($conexao);
        ?>
        </select>
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