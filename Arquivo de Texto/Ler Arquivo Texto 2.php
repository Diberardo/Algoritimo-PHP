<?php
    $arquivo = fopen('produtos.txt','r');
    if ($arquivo == false) 
    {
        echo "Arquivo não encontrado";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ler arquivo texto</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Quantidade</th>
            <th>Descrição</th>
            <th>Preço Unitário</th>
        </tr>
    <?php
        while(!feof($arquivo)) 
        {
            $linha = fgets($arquivo);
            $campos = explode(";",$linha);
            if (is_numeric($campos[0])) 
            {
                echo "<tr>";
                    echo "<td>".$campos[0]."</td>";
                    echo "<td>".$campos[1]."</td>";
                    echo "<td>".$campos[2]."</td>";
                    echo "<td>".$campos[3]."</td>";
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