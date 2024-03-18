<?php
    if (isset($_POST["nome"])) {
        $nome = $_POST["nome"];
    } else {
        $nome = "";
    }

    if (isset($_POST["idade"])) {
        $idade = $_POST["idade"];
    } else {
        $idade = 0;
    }
    $idade = $idade + 1;
    
    if (isset($_POST["estado"])) {
        $estado = $_POST["estado"];
    } else {
        $estado = "";
    }

    if (isset($_POST["sexo"])) {
        $sexo = $_POST["sexo"];
    } else {
        $sexo = "";
    }

    if (isset($_POST["tablet"])) {
        $tablet = $_POST["tablet"];
    } else {
        $tablet = "Não";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Formulário</title>
</head>
<body>
    <h1>Dados Pessoais</h1>
    <p>Nome: <?php echo $nome; ?></p>
    <p>Idade: <?php echo $idade; ?></p>
    <p>Estado: <?php echo $estado; ?></p>
    <p>Sexo: <?php echo $sexo; ?></p>
    <p>Possui Tablet: <?php echo $tablet; ?></p>
    <p><br/><b><?php echo $_POST["escondido"]; ?></b></p>
</body>
</html>