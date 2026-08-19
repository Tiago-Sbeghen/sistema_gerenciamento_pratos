<?php 

include "infra/conexao.php";

$usuarios = mysqli_query($conexao, "SELECT * FROM usuarios");
$pratos = mysqli_query($conexao, "SELECT * FROM pratos");

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Larica Now</title>
</head>

<body>
    <header>
        <h1>CRUD - Restaurante Larica Now</h1>
    </header>

    





</body>

</html>