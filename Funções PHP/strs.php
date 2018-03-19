<?
	/*//strtolower
	$texto = "STrToloWeR <br>";
	echo strtolower($texto);

	//strtoupper
	$texto1 = "strToupper <br>";
	echo strtolower($texto1);

	//ucfirst
	$texto2 = "ucfirst <br>";
	echo ucfirst($texto2);

	//strlen
	$texto3 = "  <br>";
	echo strlen($texto3);

	//
	$texto4 = " <br>";
	echo ($texto4);

	//
	$texto4 = " <br>";
	echo ($texto4);

	//
	$texto4 = " <br>";
	echo ($texto4);*/
?>

<?
	/*$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';

	$str_cpf = strlen( $cpf );

	if($str_cpf != 11 && $cpf != ''){
		echo "CPF invalido";
	}
*/?>

<form method="post" action="">
	<label>CPF:</label>
	<input type="text" name="cpf">
	<button type="submit" name="cadastrar">Enviar</button>
</form> <br><br><br>

<?
	$number = '14.15';
	echo str_replace(".", ",", $number);
?> <br><br><br>

<?
	$number = '478.351.891-40';
	echo str_replace(".", "", $number);
?> <br><br><br>


<?
		   //0123456789...
	$text = "olha ai olha sí,.,,.,,.";
	$noticia = substr($text, 0, 19);
	echo $noticia."olha só que legal.";
?> <br><br><br>