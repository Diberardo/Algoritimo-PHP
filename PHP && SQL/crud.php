<?php
    $conexao = mysqli_connect("localhost", "root", "","contatos") or die ("Falha na conexão"); // precisar sempre inicializar o banco de dados 

    $crud = $_GET["crud"];
    if ($crud == "I") 
    {
        $titulo = "INCLUSÃO";
        $id = "";
        $nome = "";
        $telefone = "";
        $email = "";
    } 
    else 
    {
        if ($crud == "A") 
        {
            $titulo = "ALTERAÇÃO";
        } 
        else 
        {
            $titulo = "EXCLUSÃO";
        }
        $id = $_GET["id"];
        $sql = "SELECT * FROM amigos WHERE id=$id"; // precisa colocar o Where para saber qual id vai ser modificado.
        $tabela = mysqli_query($conexao, $sql);
        $linha = mysqli_fetch_array($tabela); // esta passando por linha dentro da tabela 
        $nome = $linha["nome"];
        $telefone = $linha["telefone"];
        $email = $linha["email"];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Contatos - AMIGOS</title>
</head>
<body>
    <h1><?php echo $titulo; ?></h1>
    <form action="salvar.php?crud=<?php echo $crud; ?>&id=<?php echo $id; ?>" method = "post">
        <table align = "center">
            <tr>
                <td><label>Id: </label></td>
                <td><?php echo $id; ?></td>
            </tr>
            <tr>
                <td><label for="nome">Nome: </label></td>
                <td><input type="text" name="nome" id="nome" maxlength="50" value="<?php echo $nome; ?>" <?php if ($crud == "E") echo "readonly"; ?> /></td>
            </tr>
            <tr>
                <td><label for="telefone">Telefone: </label></td>
                <td><input type="text" name="telefone" id="telefone" maxlength="15" value="<?php echo $telefone; ?>" <?php if ($crud == "E") echo "readonly"; ?> /></td>
            </tr>
            <tr>
                <td><label for="email">E-mail: </label></td>
                <td><input type="text" name="email" id="email" maxlength="100" value="<?php echo $email; ?>" <?php if ($crud == "E") echo "readonly"; ?> /></td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>                
            <tr>
                <td colspan="2" align ="center">
                    <a href="index.php">VOLTAR</a>
                    <input type="submit" value="SALVAR">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
    mysqli_close($conexao); // precisa fechar tmb 
?>