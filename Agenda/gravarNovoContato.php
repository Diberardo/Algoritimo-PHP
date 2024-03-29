<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Telefônica</title>
</head>
<body>
    <?php
        $nome=strtoupper($_POST["nome"]);
        $tipo=$_POST["tipo"];
        $numero=$_POST["numero"];
        
        $arquivo = fopen("agendaTelefonica.txt","a");
        fwrite($arquivo,"\n$nome,$tipo,$numero");
        fclose($arquivo);

        echo "<p>Novo contato ($nome) gravado(a) com sucesso!</p>"
    ?>
</body>
</html>