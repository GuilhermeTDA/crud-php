<?php
include_once("Config/config.php");
include_once("Classes/Crud.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $crud = new Crud($db);
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $crud->create($nome, $idade);
    echo 'Registro salvo com sucesso!!';
    header('refresh:3,index.php');
    exit();
} ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadatro</title>
</head>

<body>
    <h1>TELA CADASTRO</h1>
    <form method="POST">
        <input type="text" name="nome" placeholder="Insira o nome " required>
        <input type="number" name="idade" placeholder="Insira a idade " required>
        <input type="submit" value="salvar">
    </form>
</body>

</html>