<?php 
include_once("../../administrador/funcoes.php");
$id = $_GET['id'];

if(!isset($_SESSION)) { 
    session_start(); 
} 

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
}

//Adicionar ao carrinho e alterar quantidade
if(!isset($_SESSION['carrinho'][$id])){ 
    $_SESSION['carrinho'][$id] = 1; 
  } else if($_GET['acao'] == 'up') { 
    $_SESSION['carrinho'][$id] += 1; 
  } else if($_GET['acao'] == 'down') { 
      if($_SESSION['carrinho'][$id] != 1) {
        --$_SESSION['carrinho'][$id]; 
      } else {
        unset($_SESSION['carrinho'][$id]);     
      }
  } else {
    $_SESSION['carrinho'][$id] += 1;
  }


  //Remover do carrinho
  if($_GET['acao'] == 'del'){ 
    if(isset($_SESSION['carrinho'][$id])){ 
      unset($_SESSION['carrinho'][$id]); 
    } 
  }


header("location: ../carrinhoDeCompras.php"); 

?>