<?php
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
    include_once("header.php"); 
    include_once("../administrador/funcoes.php"); 
   ?>  
  <br>
  <div class="container">
    <h1 style="text-align: center">Pedidos Realizados</h1>
    <a class="btn btn-secondary" href="index.php">Voltar</a>  
    <br> 
    <table class="table table-hover" style="text-align: center">
      <br>
      <tr>
        <td><b>ID</b></td>
        <td><b>Produtos</b></td>
        <td><b>Valor</b></td>
        <td><b>Ações</b></td>
        
      </tr>
      <?php
        $lnCliente = $_SESSION['cliente'];
        $idCliente = $lnCliente['id_cliente'];
        $resultado = listarVendaPorIdCliente($idCliente);
        while ($linha = mysqli_fetch_array($resultado)) {
      ?>
        <tr>
            <td><?php echo $linha['id_venda']; ?></td>
            <td>
            <?
            $resultadoItemVenda = listarItemVendaPorId($linha['id_venda']);
            while ($linhaItem = mysqli_fetch_array($resultadoItemVenda)) {
            ?>
            - <?php echo $linhaItem['nome'];?>
            
            <? } ?>
            </td>
            <td>R$ <?php echo $linha['valor']; ?></td>
            <td><a class="btn btn-primary mb-2" href="detalhesPedido.php?id=<?=$linha['id_venda']?>">Ver detalhes</a></td>
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