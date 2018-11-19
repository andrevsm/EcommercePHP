<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];

// Conecta no MySQL (host, user, senha, banco)
$conexao = mysqli_connect("localhost","root") or die( "Não foi possível conectar ao banco MySQL");

// Conecta no banco de dados "restaurante"
mysqli_select_db($conexao,"estoque") or die("Erro de acesso ao banco de dados");
$query = "select * from categoria where id_categoria=$id";
// SQL
if(!empty($_GET)) {
        $id = $_GET['id'];
        $query = "update categoria set nome = '$nome', descricao = '$descricao' where id_categoria=$id";
}
else {
        $query = "INSERT INTO categoria(nome, descricao) VALUES ('$nome', '$descricao')";
}
echo $query;
//$resultado = mysql_query($query,$conexao);
$resultado = mysqli_query($conexao,$query) or die('Erro de query ' . mysqli_error($conexao));

mysqli_close($conexao);

// Redireciona para a lista
header( 'Location: ../categorias.php' ) ;
?>
