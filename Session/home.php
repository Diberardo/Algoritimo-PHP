<?php
//INICIO A SESSÃO
session_start();
 
//Verifico se o usuário está logado no sistema
if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE) {
    header("Location: login.php?erro=2");
}
else {
    echo "<h1>Seja bem-vindo, ".$_SESSION["user"]."</h1>";
}
?>