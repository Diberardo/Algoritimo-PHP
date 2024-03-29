<?php
$arquivo = file_get_contents('Coleçoes.json');

$json = json_decode($arquivo);

foreach($json as $registro)
{
echo "<b>Nome:</b> ". $registro->Nome . '<br />';
echo "<b>Preço:</b> ". $registro->Preço . '<br />';
echo "<b>Ano de fabricação:</b> ". $registro->Anodefabricação . '<br />';
echo "<b>Tiragem:</b> ". $registro->Tiragem . '<br />';
echo "<b>Valor Facial:</b> ". $registro->Valorfacial . '<br />';
echo "<img src='". $registro->imagem ."'>";
echo "<br><br>";
}
?>