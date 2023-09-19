<?php
include_once './_conexao.php';


$sql = "DELETE FROM setor WHERE CargoID=" .$_GET['SetorID'];



// faz o redirecionamento
header("Location: ./setor-lista.php", true, 302);
exit();
?>