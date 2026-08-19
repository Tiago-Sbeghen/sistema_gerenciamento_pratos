<?php 

include "infra/conexao.php";

$usuarios = mysqli_query($conexao, "SELECT * FROM usuarios");
$pratos = mysqli_query($conexao, "SELECT * FROM pratos");

?>