<?php
include_once './_conexao.php';


$sql = "DELETE FROM setor WHERE SetorID=" .$_GET['id'];
mysqli_query($conexao,$sql);



// faz o redirecionamento
header("Location: ./setor-lista.php", true, 302);
exit();
?>