<?php
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$id_categoria = $_POST['id_categoria'];
$id_fornecedor = $_POST['id_fornecedor'];

// Conecta no MySQL (host, user, senha, banco)
$conexao = mysqli_connect("localhost","root") or die( "Não foi possível conectar ao banco MySQL");

// Conecta no banco de dados "restaurante"
mysqli_select_db($conexao,"estoque") or die("Erro de acesso ao banco de dados");
// $query = "select * from produto where id_produto=$id";
// SQL
if(!empty($_GET)) {
        $id = $_GET['id'];
        $query = "update produto set nome = '$nome', descricao = '$descricao', valor = '$valor', id_categoria = (SELECT id_categoria FROM categoria WHERE $id_categoria=id_categoria), id_fornecedor = '$id_fornecedor' where id_produto=$id";
}
else {
        $query = "INSERT INTO produto(nome, descricao, valor, id_categoria, id_fornecedor) VALUES ('$nome', '$descricao', '$valor', (SELECT id_categoria FROM categoria WHERE id_categoria = $id_categoria), (SELECT id_fornecedor FROM fornecedor WHERE id_fornecedor = $id_fornecedor))";
}
echo $query;
//$resultado = mysql_query($query,$conexao);
$resultado = mysqli_query($conexao,$query) or die('Erro de query ' . mysqli_error($conexao));

mysqli_close($conexao);

// Redireciona para a lista
header( 'Location: ../produtos.php' ) ;
?>
