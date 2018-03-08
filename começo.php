<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo_php.css">
	<title>Mensagens divertidas</title>
</head>
<body>

<?
	$Mensagens_divertidas[1] = 'Estou fazendo as contas aqui,';
	$Mensagens_divertidas[2] = ' e este mês não vai ter';
	$Mensagens_divertidas[3] = ' jeito, vou ter que ';
	$Mensagens_divertidas[4] = ' ganhar na loteria';

	var_dump($Mensagens_divertidas[1]);
	echo "<br />";
	print_r($Mensagens_divertidas);
	echo "<br />";
	print $Mensagens_divertidas[3];
?>

</body>
</html>