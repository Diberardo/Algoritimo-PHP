<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravação de Arquivo texto</title>
</head>
<body>
    <?php
        $codigo=$_GET['codigo'];
        $qtdade=$_GET['qtdade'];
        $descricao=$_GET['descricao'];
        $precoUnitario=$_GET['precoUnitario'];

        $arquivo = fopen("produtos.txt","a");
        fwrite($arquivo,"$codigo;$qtdade;$descricao;$precoUnitario\n");
        fclose($arquivo);

        echo "<p>$descricao gravado(a) com sucesso!</p>"
    ?>
</body>
</html>