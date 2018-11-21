<?php
session_start();

$cliente = $_SESSION['cliente'];

if(!empty($cliente)){ 
        // Conecta no MySQL (host, user, senha, banco)
        $conexao = mysqli_connect("localhost","root") or die( "Não foi possível conectar ao banco MySQL");
        // $idCliente = $_POST[id_cliente];
        
        // Conecta no banco de dados "restaurante"
        mysqli_select_db($conexao,"estoque") or die("Erro de acesso ao banco de dados");
        
        $lnCliente = $_SESSION['cliente'];
        $idCliente = $lnCliente['id_cliente'];
        
        $total = $_SESSION['total'];
        
        $query = "INSERT INTO venda (valor, id_cliente) VALUES ('$total', '$idCliente')";
        //Executa a query1
        $resultadoQ1 = mysqli_query($conexao,$query) or die('Erro de query ' . mysqli_error($conexao));
        
        $queryIdVenda = "SELECT id_venda from venda ORDER BY id_venda DESC LIMIT 1";
        //Executa a queryIdVenda
        $resultadoQ2 = mysqli_query($conexao,$queryIdVenda) or die('Erro de query ' . mysqli_error($conexao));
        $lnIdVenda = mysqli_fetch_array($resultadoQ2);
        $idVenda = $lnIdVenda['id_venda'];

        $lnCarrinho = $_SESSION['carrinho'];
        foreach($_SESSION['carrinho'] as $idProduto => $qtd) {
                print_r($ln);
                $query2 = "INSERT INTO itemVenda (id_produto, id_venda, quantidade) VALUES ('$idProduto', '$idVenda', '$qtd')";
                // Executa a query2
                $resultado = mysqli_query($conexao,$query2) or die('Erro de query ' . mysqli_error($conexao));
        }
        
        mysqli_close($conexao);

        // Redireciona para a lista
        header('Location: ../../usuario/meusPedidos.php');        
        exit();
} else {
        header('Location: ../../usuario/index.php');
        exit();
}

?>
