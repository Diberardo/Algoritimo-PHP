<?php
    $conexao = mysqli_connect("localhost", "root", "","contatos") or die ("Falha na conexão");

    $crud = $_GET["crud"];
    $id = $_GET["id"];

    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];

    switch ($crud) 
    {
        case "I":
            $sql = "INSERT INTO amigos 
                    (nome, telefone, email) 
                    VALUES 
                    ('$nome', '$telefone', '$email')";
            break;
        case "A":
            $sql = "UPDATE amigos SET 
                    nome = '$nome', 
                    telefone = '$telefone', 
                    email = '$email' 
                    WHERE id = $id";
            break;
        case "E":
            $sql = "DELETE FROM amigos 
                    WHERE id = $id";
    }

    $tabela = mysqli_query($conexao, $sql);

    mysqli_close($conexao);

    header("Location: index.php"); // volta para a pagina inicial.
?>