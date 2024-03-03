<?php
   $alt = isset($_GET['Altura']) ? (float)$_GET['Altura'] : 0;
   $sex = isset($_GET['Sexo']) ? $_GET['Sexo'] : '';

   define('Homens','72,7');
   define('Mulher', '61,1');

   if ( $sex ==  'M')
   {
    $resul = Homens * $alt - 58; 
   }
   else
   {
     $resul = Mulher * $alt - 44.7;
   }

   echo 'Imc = '. $resul; 
?>