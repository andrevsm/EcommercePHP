<?php include_once("administrador/funcoes.php"); ?>
<html>
<head>
    <title>Sistema Estoque</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
</head>
<body>
<div class='container'>
  <?php require_once("header.php"); ?>
  <br>
  <h1 style="text-align: center">Produtos</h1>
  <div class="album py-5 bg-white">
    <div class="container">
      <div class="row">
        <?php
          $produtos = listarProdutos();
          foreach ($produtos as $produto) {
        ?>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="..." style="height: 16rem;" alt="imagem do produto">
            <div class="card-body">
              <h4 class="card-title"> <?=$produto['nome']?> </h4>
              <p class="card-text">Categoria: <?=$produto['categoria_nome']?></p>
              <p class="card-text">Fornecedor: <?=$produto['fornecedor_nome']?> </p>
              <p class="card-text">Valor: R$ <?=$produto['valor']?> </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a class="btn btn-primary" href="venda/detalhesProduto.php?&id=<?=$produto['id_produto']?>">Ver</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php
        }
        ?>    
      </div>
    </div>
  </div>

</div>

<footer class="footer">
  <div class="container">
    <span class="text-muted">Sistema Estoque </span>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</body>
</html>