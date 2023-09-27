<?php
include_once './_conexao.php';

$id = isset($_POST['id']) ? $_POST['id']: '';
$nome = isset($_POST['txtNome']) ? $_POST['textNome']: '';
$andar = isset($_POST['textAndar']) ? $_POST['Andar']: '';
$cor = isset($_POST['txtCor']) ? $_POST['Cor']: '';

    if( empty($id) ){
        $sql  = "INSERT INTO setor (Nome, Andar, Cor) VALUES ($nome, $andar, $cor) ";
    }else{
        $sql = "UPDATE setor SET Nome = '$nome', Andar = '$andar', Cor = '$cor' WHERE SetorID = $id";

    }

    mysqli_query($conexao,$sql);    

// faz o redirecionamento
header("Location: ./setor-lista.php", true, 302);
exit();
?>