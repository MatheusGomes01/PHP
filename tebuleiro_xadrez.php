<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo_php.css">
	<title>Tabuleiro de Xadrez</title>
</head>
<body>

<?

	$tabuleiro[8]['a'] = 'torre preta';
	$tabuleiro[8]['b'] = 'bispo preta';
	$tabuleiro[8]['c'] = 'cavalo preta';
	$tabuleiro[8]['d'] = 'rainha preta';
	$tabuleiro[8]['e'] = 'rei preta';
	$tabuleiro[8]['f'] = 'bispo preta';
	$tabuleiro[8]['g'] = 'cavalo preta';
	$tabuleiro[8]['h'] = 'torre preta';

	$tabuleiro[8]['a'] = 'peão preto';
	$tabuleiro[7]['b'] = 'peão preto';
	$tabuleiro[7]['c'] = 'peão preto';
	$tabuleiro[7]['d'] = 'peão preto';
	$tabuleiro[7]['e'] = 'peão preto';
	$tabuleiro[7]['f'] = 'peão preto';
	$tabuleiro[7]['g'] = 'peão preto';
	$tabuleiro[7]['h'] = 'peão preto';

	print_r($tabuleiro);
	print '<br />';
	print '<br />';
	print $tabuleiro[8]['d'];
	print '<br />';
	print '<br />';
	print $tabuleiro[7]['b'];
	print '<br />';
	print '<br />';
	print $tabuleiro[8]['e'];
?>

</body>
</html>