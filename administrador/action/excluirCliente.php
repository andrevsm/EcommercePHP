<?php
$id = $_GET['id'];

// Conecta no MySQL (host, user, senha, banco)
$conexao = mysqli_connect("localhost","root") or die( "Não foi possível conectar ao banco MySQL");

// Conecta no banco de dados "restaurante"
mysqli_select_db($conexao,"estoque") or die("Erro de acesso ao banco de dados");

// SQL
$query = "delete from cliente where id_cliente=$id";

echo $query;
//$resultado = mysql_query($query,$conexao);
$resultado = mysqli_query($conexao,$query) or die('Erro de query ' . mysqli_error($conexao));

mysqli_close($conexao);

// Redireciona para a lista
header( 'Location: ../clientes.php' ) ;
?>
