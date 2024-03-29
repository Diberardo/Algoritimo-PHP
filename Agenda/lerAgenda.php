<?php
    $arquivo = fopen('agendaTelefonica.txt','r');
    if ($arquivo == false) {
        echo "Arquivo não encontrado";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Telefônica</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Tipo de contato</th>
            <th>Número do telefone</th>
        </tr>
    <?php
        while(!feof($arquivo)) {
            $linha = fgets($arquivo);
            $campos = explode(",",$linha);
            if (is_string($campos[0])) {
                echo "<tr>";
                    echo "<td>".$campos[0]."</td>";
                    echo "<td>".$campos[1]."</td>";
                    echo "<td>".$campos[2]."</td>";
                echo "</tr>";
            }
        }
    ?>
    </table>
</body>
</html>
<?php
    fclose($arquivo);
?>