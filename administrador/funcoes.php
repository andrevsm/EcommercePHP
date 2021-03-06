<?php
function conectar() {
    // Conecta no MySQL (host, user, senha, banco)
    $conexao = mysqli_connect("localhost","root") or die( "Não foi possível conectar ao banco MySQL");
    // Conecta no banco de dados "treinamentos"
    mysqli_select_db($conexao,"estoque") or die("erro 2");
    return $conexao;
}
function listarClientes() {
    $conexao = conectar();
    $query = "SELECT * FROM cliente ORDER BY id_cliente;";
    $resultado = mysqli_query($conexao,$query) or die('Erro de query ' . mysqli_error($conexao));
    // Fecha a conexão
    mysqli_close($conexao);
    return $resultado;
}
function listarClientePorId($id) {
    $conexao = conectar();
    $query = "SELECT * FROM cliente WHERE id_cliente=$id";
    $resultado = mysqli_query($conexao,$query) or die('Erro de query ' . mysqli_error($conexao));
    // Fecha a conexão
    mysqli_close($conexao);
    return $resultado;
}
function listarProdutos() {
    $conexao = conectar();
    $query = "SELECT produto.id_produto, produto.nome, produto.valor, categoria.nome AS categoria_nome, 
        fornecedor.nome AS fornecedor_nome FROM produto INNER JOIN categoria ON 
        produto.id_categoria = categoria.id_categoria INNER JOIN fornecedor ON 
        produto.id_fornecedor = fornecedor.id_fornecedor;"; 
    $resultado = mysqli_query($conexao,$query) or die('Erro de query ' . mysqli_error($conexao));
    // Fecha a conexão
    mysqli_close($conexao);
    return $resultado;
}
function listarProdutoPorId($id) {
    $conexao = conectar();
    $query = "SELECT * FROM produto WHERE id_produto=$id";
    $resultado = mysqli_query($conexao,$query) or die('Erro de query ' . mysqli_error($conexao));
    // Fecha a conexão
    mysqli_close($conexao);
    return $resultado;
}
function listarProdutoParaExcluir($id) {
    $conexao = conectar();
    $query = "SELECT produto.id_produto, produto.nome, produto.descricao, produto.valor, 
        categoria.nome AS nomeCategoria, fornecedor.nome AS nomeFornecedor 
        FROM produto INNER JOIN categoria ON produto.id_categoria = categoria.id_categoria
        INNER JOIN fornecedor ON produto.id_fornecedor = fornecedor.id_fornecedor WHERE id_produto=$id";
    $resultado = mysqli_query($conexao,$query) or die('Erro de query ' . mysqli_error($conexao));
    // Fecha a conexão
    mysqli_close($conexao);
    return $resultado;
}
function listarCategorias() {
    $conexao = conectar();
    $query = "SELECT * FROM categoria ORDER BY id_categoria;";
    $resultado = mysqli_query($conexao,$query) or die('Erro de query ' . mysqli_error($conexao));
    // Fecha a conexão
    mysqli_close($conexao);
    return $resultado;
}
function listarCategoriaPorId($id) {
    $conexao = conectar();
    $query = "SELECT * FROM categoria WHERE id_categoria=$id";
    $resultado = mysqli_query($conexao,$query) or die('Erro de query ' . mysqli_error($conexao));
    // Fecha a conexão
    mysqli_close($conexao);
    return $resultado;
}
function listarFornecedores() {
    $conexao = conectar();
    $query = "SELECT * FROM fornecedor ORDER BY id_fornecedor;";
    $resultado = mysqli_query($conexao,$query) or die('Erro de query ' . mysqli_error($conexao));
    // Fecha a conexão
    mysqli_close($conexao);
    return $resultado;
}
function listarFornecedorPorId($id) {
    $conexao = conectar();
    $query = "SELECT * FROM fornecedor WHERE id_fornecedor=$id";
    $resultado = mysqli_query($conexao,$query) or die('Erro de query ' . mysqli_error($conexao));
    // Fecha a conexão
    mysqli_close($conexao);
    return $resultado;
}
function listarVendas() {
    $conexao = conectar();
    $query = "SELECT * FROM venda";
    $resultado = mysqli_query($conexao,$query) or die('Erro de query ' . mysqli_error($conexao));
    // Fecha a conexão
    mysqli_close($conexao);
    return $resultado;
}
function listarVendaPorIdCliente($id) {
    $conexao = conectar();
    $query = "SELECT * FROM venda WHERE id_cliente=$id";
    $resultado = mysqli_query($conexao,$query) or die('Erro de query ' . mysqli_error($conexao));
    // Fecha a conexão
    mysqli_close($conexao);
    return $resultado;
}
function listarUltimaVendaPorIdCliente($id) {
    $conexao = conectar();
    $query = "SELECT * FROM venda WHERE id_cliente=$id ORDER BY id_venda DESC LIMIT 1";
    $resultado = mysqli_query($conexao,$query) or die('Erro de query ' . mysqli_error($conexao));
    // Fecha a conexão
    mysqli_close($conexao);
    return $resultado;
}
function listarItemVendaPorId($id) {
    $conexao = conectar();
    $query = "SELECT quantidade, produto.nome, produto.descricao, produto.valor,
        categoria.nome AS nomeCategoria, fornecedor.nome AS nomeFornecedor 
        FROM itemVenda INNER JOIN produto ON itemVenda.id_produto = produto.id_produto INNER JOIN categoria ON produto.id_categoria = categoria.id_categoria
        INNER JOIN fornecedor ON produto.id_fornecedor = fornecedor.id_fornecedor WHERE id_venda=$id";
    $resultado = mysqli_query($conexao,$query) or die('Erro de query ' . mysqli_error($conexao));
    // Fecha a conexão
    mysqli_close($conexao);
    return $resultado;
}
?>