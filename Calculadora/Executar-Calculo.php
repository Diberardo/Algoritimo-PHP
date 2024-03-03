<?php 
    if (isset ($_POST["v1"]))
    {
        $v1 = $_POST["v1"];
    } else {
        $v1 = 0;
    }
    if (isset ($_POST["v2"]))
    {
        $v2 = $_POST["v2"];
    } else {
        $v2 = 0;
    }
    if (isset($_POST["operacao"]))
    {
        $operacao = $_POST["operacao"];
    } else {
        $operacao = "";
    }
    if ($operacao == "soma")
    {
        $resultado = $v1 + $v2;
    }
    elseif ($operacao == "subtração")
    {
        $resultado = $v1 - $v2;
    }
    elseif ($operacao == "multiplicação")
    {
        $resultado = $v1 * $v2;
    } else {
        if ($v2 == 0)
        {
            $resultado = "Não é possível divisão por zero!";
        } else {
            $resultado = $v1 / $v2;
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples - Resultado</title>
</head>
<body>
<h1>Calculadora Simples</h1>
<p>Resultado:
    <?php echo "O resultado da operação de ".$operacao." de ".$v1." por ".$v2." é: ".$resultado."." ?>
</p>
<form action="calculadora.html" method="post">
    <p>
        <input type="submit" name="voltar" value="NOVO CÁLCULO">
    </p>
</form>
</body>
</html>