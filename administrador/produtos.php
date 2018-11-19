<html>
<head>
  <title>Produtos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta charset="utf-8"> 
  <link href="../css/sticky-footer-navbar.css" rel="stylesheet">
</head>

<body>
  <?php include_once("header_admin.php"); ?>  
  <?php include_once("funcoes.php"); ?>  
  <br>
  <div class="container">
    <h1 style="text-align: center">Lista de Produtos</h1>
    <a class="btn btn-primary" href="cadastrarProduto.php">Cadastrar novo produto</a>  
    <br> 
    <table class="table table-hover" style="text-align: center">
      <br>
      <tr>
        <td><b>ID</b></td>
        <td><b>Nome</b></td>
        <td><b>Valor</b></td>
        <td><b>Categoria</b></td>
        <td><b>Fornecedor</b></td>
        <td><b>Ações</b></td>
        <td><b></b></td>
      </tr>
      <?php
        $resultado = listarProdutos();

        while ($linha = mysqli_fetch_array($resultado)) {
      ?>
        <tr>
            <td><?php echo $linha['id_produto']; ?></td>
            <td><?php echo $linha['nome']; ?></td>
            <td><?php echo $linha['valor']; ?></td>
            <td><?php echo $linha['categoria_nome']; ?></td>
            <td><?php echo $linha['fornecedor_nome']; ?></td>
            <td width="10px">
              <form method="post" action="editarProduto.php?id=<?php print $linha['id_produto'];?>">
                <input type="submit" class="btn btn-info" value="Editar"> 
              </form>
            </td>
            <td width="10px">
              <form method="post" action="excluirProduto.php?id=<?php print $linha['id_produto'];?>">
                <input type="submit" class="btn btn-danger" value="Excluir">
              </form>
            </td>
        </tr>
      <?php
      }
      ?>
    </table>
  </div> 

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