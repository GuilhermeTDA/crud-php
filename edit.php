<?php
include_once("Config/config.php");
include_once("Classes/Crud.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $crud = new Crud($db);
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $crud->update($id, $nome, $idade);
    echo 'editado com sucesso';
    header('refresh:2,index.php');
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $crud = new Crud($db);
    $data = $crud->readEdit($id);
    $row = $data->FETCH(PDO::FETCH_ASSOC);
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>

<body>
    <h1>EDITAR CADASTRO</h1>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="nome" value="<?php echo $row['nome']; ?>">
        <input type="number" name="idade" value="<?php echo $row['idade']; ?>">
        <input type="submit" value="editar ">
    </form>
</body>

</html>