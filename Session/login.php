<?php
if (isset($_GET['erro'])) {
	$erro = $_GET['erro'];
} 
else {
	$erro = 0;
}
if ($erro == 1) {
	$msg = "Login e/ou Senha invalido(s).";
} 
else {
	if ($erro == 2) {
		$msg = "Digite Login e Senha.";
	} 
	else {
		$msg = "";
	}
}
?>
<form action="validaLogin.php" method="post" id="form" name="form">
	<label for="login">Login: <input type="text" name="login" id="login" /></label>
	<label for="senha">Senha: <input type="password" name="senha" id="senha" /></label>
	<button type="submit">LOGIN</button>
</form>
<?php
	echo "<p><font color='red'>".$msg."</font></p>";
?>