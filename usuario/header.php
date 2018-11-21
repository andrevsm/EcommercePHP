<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(empty($_SESSION['cliente'])) {
        ?>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="./index.php">Sistema Estoque</a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="navbar nav-link active font-weight-bold" href="usuario/cadastrarCliente.php">Cadastre-se!</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar nav-link active" href="usuario/index.php">Acessar conta</a>
                    </li>
                </ul>
            </div>
        </nav>
    <?
    } else {
    ?>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.php">Minha conta</a>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a class="nav-link" href="../index.php">Produtos</a></li>
                <li class="nav-item active"><a class="nav-link" href="meusPedidos.php">Meus pedidos</a></li>
                <li class="nav-item active">
                <form method="post" class="navbar-nav mr-auto" action="action/logout.php">
                    <button type="submit" class="btn btn-dark">Sair</button>
                </form>
                </li>
            </ul>
            <div class="navbar-nav mt-2 mt-md-0"><a class="navbar nav-link active font-weight-bold" href="../index.php">Sistema Estoque</a></div>
        </div>
    </nav>

    <?
    }
    ?>