<?php
    $n = $_GET['a'];
    $f = 1;
    echo "<p>O fatorial de $n é igual a: </p>";
    if ($n <  0)
    {
        echo "O numero informado deve ser inteiro maior ou igual a zero.";
    }
    elseif ($n<=1)
    {
        echo "$n! = 1";
    }
    else
    {
        echo "$n!= ";
        for ($i=1; $i<=$n; $i++)
        {
            $f *= $i;
            if ($i<$n)
            {
                echo "$i x ";
            }
            else
            {
                echo"$i";
            }
        }
        echo " = $f";
    }    
?>