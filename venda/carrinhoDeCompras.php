<?php include_once("../administrador/funcoes.php"); 
$id = $_GET['id'];

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<html>
<head>
    <title>Sistema Estoque</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <link href="../css/sticky-footer-navbar.css" rel="stylesheet">
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<?php include_once("header.php");
if (!empty($_SESSION['carrinho'])) {
    $total = 0;
    ?>   
<br>
<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">                            
                            <th scope="col">Produto</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Preço</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <? foreach($_SESSION['carrinho'] as $id => $qtd) {
                        $resultado = listarProdutoPorId($id);
                        $linha = mysqli_fetch_array($resultado);
                        $total += $linha['valor'] * $qtd;
                        ?>
                    <tbody>
                        <tr class="text-center">
                            <td><?=$linha['nome']?></td>
                            <td>
                                <a class="btn btn-sm btn-danger" href="action/adicionarItem.php?acao=down&id=<?=$id?>"><i class="fa fa-minus"></i></a>
                                &emsp;<label><?=$qtd?></label>&emsp;
                                <a class="btn btn-sm btn-success" href="action/adicionarItem.php?acao=up&id=<?=$id?>"><i class="fa fa-plus"></i></a>
                            </td>
                            <td>R$ <?=$linha['valor']?></td>
                            <td>
                                <a class="btn btn-sm btn-danger" href="action/adicionarItem.php?acao=del&id=<?=$id?>"><i class="fa fa-trash"></i></a>
                            </td>                            
                        </tr>
                    <?
                    }
                    ?>
                        <tr class="text-center">
                            <td></td>
                            <td></td>
                            <td>
                            <strong>Total</strong>
                            <label>R$ <?=$total?></label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a class="btn btn-block btn-light" href="../index.php">Comprar mais itens</a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase">Finalizar compra</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?
} else {
    ?>
    <div class="jumbotron">
        <h2 class="text-center">Não há itens no carrinho :(</h2>  
    </div>
<?
}
?>


<footer class="footer">
  <div class="container">
    <span class="text-muted">Sistema Estoque </span>
  </div>
</footer>

</body>
</html>