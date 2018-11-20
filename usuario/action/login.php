<?php
$email = $_POST['email'];
$senha = $_POST['senha'];

// Conecta no MySQL (host, user, senha, banco)
$conexao = mysqli_connect("localhost","root") or die( "Não foi possível conectar ao banco MySQL");

// Conecta no banco de dados "restaurante"
mysqli_select_db($conexao,"estoque") or die("Erro de acesso ao banco de dados");

$query = "SELECT id_cliente, nome, email, senha FROM cliente WHERE email='$email' and senha='$senha'";
$resultado = mysqli_query($conexao,$query) or die('Erro de query ' . mysqli_error($conexao));
// SQL
$linha = mysqli_fetch_array($resultado);
if($email == $linha['email'] && $senha == $linha['senha']){

    //Inicia a sessão
    if(!isset($_SESSION)) { 
        session_start(); 
    } 

    include_once("../../administrador/funcoes.php");
    
    //Preenche o Session com o cliente
    $resultado = listarClientePorId($linha['id_cliente']);
    $cliente = mysqli_fetch_array($resultado);
    $_SESSION['cliente'] = $cliente;

    if(!empty($_SESSION['carrinho'])) {
        header("Location: ../../venda/carrinhoDeCompras.php");    
    } else {
        header("Location: ../index.php");    
    }
    
} else {
    $message = urlencode("Usuário ou senha incorretos.");
    header("Location: ../index.php?message=".$message);
} 

$resultado = mysqli_query($conexao,$query) or die('Erro de query ' . mysqli_error($conexao));
mysqli_close($conexao);

?>
