<?php
    $conexao = mysqli_connect("localhost", "root", "","contatos") or die ("Falha na conexão");

    $tabela = mysqli_query($conexao, "SELECT * FROM amigos");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos - AMIGOS</title>
</head>
<body>
    <center>
        <h1>MEUS AMIGOS</h1>
    </center>
    <table border="1" align="center">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>TELEFONE</th>
            <tH>E-MAIL</tH>
            <td colspan="2" align="center"><a href="crud.php?crud=I">Incluir</a></td>
        </tr>
<?php
        while ($linha = mysqli_fetch_array($tabela))
        {
?>
            <tr>
                <td><?php echo $linha["id"]; ?></td>
                <td><?php echo $linha["nome"]; ?></td>
                <td><?php echo $linha["telefone"]; ?></td>
                <td><?php echo $linha["email"]; ?></td>
                <td><a href=""><a href="crud.php?crud=A&id=<?php echo $linha["id"]; ?>">Alterar</a></td>
                <td><a href=""><a href="crud.php?crud=E&id=<?php echo $linha["id"]; ?>">Excluir</a><?php</td>
            </tr>
<?php
        }
?>
    </table>
</body>
</html>
<?php
    mysqli_close($conexao);
?>