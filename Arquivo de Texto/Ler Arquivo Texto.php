<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ler arquivo texto</title>
</head>
<body>
    <?php
        $arquivo = fopen('produtos.txt','r');
        if ($arquivo == false) 
        {
            echo "Arquivo não encontrado";
        }
        while(!feof($arquivo)) 
        {
            $linha = fgets($arquivo);
            echo $linha."<br>";
        }
        fclose($arquivo);
    ?>
</body>
</html>