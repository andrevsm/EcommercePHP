<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];
$endereco = $_POST['endereco'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];

// Conecta no MySQL (host, user, senha, banco)
$conexao = mysqli_connect("localhost","root") or die( "Não foi possível conectar ao banco MySQL");

// Conecta no banco de dados "restaurante"
mysqli_select_db($conexao,"estoque") or die("Erro de acesso ao banco de dados");
$query = "select * from fornecedor where id_fornecedor=$id";
// SQL
if(!empty($_GET)) {
        $id = $_GET['id'];
        $query = "update fornecedor set nome='$nome', cnpj='$cnpj', endereco='$endereco', 
        complemento ='$complemento', cidade='$cidade', estado='$estado', cep='$cep' where id_fornecedor=$id";
}
else {
        $query = "INSERT INTO fornecedor(nome, cnpj, endereco, complemento, cidade, estado, cep) 
        VALUES ('$nome', '$cnpj', '$endereco', '$complemento', '$cidade', '$estado', '$cep')";
}
echo $query;
//$resultado = mysql_query($query,$conexao);
$resultado = mysqli_query($conexao,$query) or die('Erro de query ' . mysqli_error($conexao));

mysqli_close($conexao);

// Redireciona para a lista
header( 'Location: ../fornecedores.php' ) ;
?>
