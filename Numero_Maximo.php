<?php
    
    $a = $_GET['a'];
    $i;

    for ( $i = 1; $i <= $a; $i++ )
    {
        if ( $i % 2 != 0)
        {
            echo '1';
        }
        else
        {
            echo $i;
        }
    }
?>