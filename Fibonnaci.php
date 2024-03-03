<?php
    $termo = $_GET['a'];
    $t1 = 0;
    $t2 = 1;
    //$f;
    echo "<p>Sequencia de Fibonacci de $termo termo(s): </p>";
    echo "<table><tr?>";
    if ($termo<=0)
    {
        echo "O termo informado deve ser um número inteiro maior do que zero.";
    }
    elseif ($termo==1)
    {
        echo "0";
    }
    elseif ($termo==2)
    {
        echo "0 1";
    }
    else
    {
        echo"<td>"."0 1"."</td>";
        for ($i=3; $i<=$termo; $i++)
        {
            $f = $t1+$t2;
            echo"<td>".$f."</td>";
            $t1=$t2;
            $t2=$f;
        }
    }
    echo "</tr></table>";
?>