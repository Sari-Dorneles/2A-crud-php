<?php
// inclusao de arquivos base
include_once './_conexao.php';
include_once './_header.php';
$id = isset($_GET['ID'])?$_GET['ID']:'';

if(!empty($ID)){
    $ID = $_GET['ID'];

    $sql = "SELECT * FROM setor WHERE SetorID = ".$ID;
    $resultado = mysqli_query($conexao,$sql);
if (!empty($resultado)){
    $dado = $mysqli_fetch_array($resultado);
    $nome = $dado['Nome'];
    $andar = $dado['Andar'];
    $cor = $dado['Cor'];

}else{
    $ID = '';
    $Nome = '';
    $Andar = '';
    $Cor = '';
}

}else{
    $ID = '';
    $Nome = '';
    $Andar = '';
    $Cor = '';
}
?>


<h1>Salvar Setor</h1>
<form action="./setor-acao.php" method="post">
    <input type="text" value="">
    <ul>
        <li>
            <label for="">Nome</label>
            <input type="text">
        </li>
        <li>
            <label for="">Andar</label>
            <input type="text">
        </li>
        <li>
            <label for="">Cor</label>
            <input type="text">
        </li>
        <li>
            <input type="submit" value="Cadastrar">
            <a href="./setor-lista.php">Voltar</a>
        </li>
    </ul>
</form>

<?php
// footer
include_once './_footer.php';
?>    