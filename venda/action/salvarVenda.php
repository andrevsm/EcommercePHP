<?php
session_start();

$cliente = $_SESSION['cliente'];

if(!empty($cliente)){ 
        header('Location: ../../usuario/meusPedidos.php');
        exit();
} else {
        header('Location: ../../usuario/index.php');
        exit();
}
// Conecta no MySQL (host, user, senha, banco)
// $conexao = mysqli_connect("localhost","root") or die( "Não foi possível conectar ao banco MySQL");

// Conecta no banco de dados "restaurante"
// mysqli_select_db($conexao,"estoque") or die("Erro de acesso ao banco de dados");
// $query = "select * from cliente where id_cliente=$id";
// // SQL
// if(!empty($_GET)) {
//         $id = $_GET['id'];
//         $query = "update cliente set nome = '$nome', cpf = '$cpf', dt_nascimento = '$dt_nascimento', email = '$email', senha = '$senha' where id_cliente=$id";
// }
// else {
//         $query = "INSERT INTO cliente(nome, cpf, dt_nascimento, email, senha) VALUES ('$nome', '$cpf', '$dt_nascimento', '$email', '$senha')";
// }
// echo $query;
// //$resultado = mysql_query($query,$conexao);
// $resultado = mysqli_query($conexao,$query) or die('Erro de query ' . mysqli_error($conexao));

// mysqli_close($conexao);

// Redireciona para a lista
// header('Location: ../../usuario/meusPedidos.php');
?>
