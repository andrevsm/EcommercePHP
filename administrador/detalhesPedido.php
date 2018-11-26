<?php
$id = $_GET['id'];

if(!isset($_SESSION)) { 
    session_start(); 
} 
?>

<html>
<head>
  <title>Pedidos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta charset="utf-8"> 
  <link href="../css/sticky-footer-navbar.css" rel="stylesheet">
</head>

<body>
  <?php 
    include_once("header_admin.php"); 
    include_once("funcoes.php"); 
   ?>  
  <br>
  <div class="container">
    <h1 style="text-align: center">Detalhes do Pedido</h1>
    <a class="btn btn-secondary" href="vendas.php">Voltar</a>  
    <br> 
    <table class="table table-hover" style="text-align: center">
      <br>
      <tr>
        <td><b>Produto</b></td>
        <td><b>Descrição</b></td>
        <td><b>Valor</b></td>
        <td><b>Quantidade</b></td>
        <td><b>Categoria</b></td>
        <td><b>Fornecedor</b></td>
      </tr>
      <?php
        $resultado = listarItemVendaPorId($id);
        // print_r($resultado);
        // $linha1 = mysqli_fetch_array($resultado);
        // print_r($linha1);
        // exit();
        while ($linha = mysqli_fetch_array($resultado)) {
      ?>
        <tr>
            <td><?php echo $linha['nome']; ?></td>
            <td><?php echo $linha['descricao']; ?></td>
            <td>R$ <?php echo $linha['valor']; ?></td>
            <td><?php echo $linha['quantidade']; ?></td>
            <td><?php echo $linha['nomeCategoria']; ?></td>
            <td><?php echo $linha['nomeFornecedor']; ?></td>
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