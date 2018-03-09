<?
	$produtos[1] = 'Sofá';
	$produtos[2] = 'mesa';
	$produtos[3] = 'pc';
	$produtos[4] = 'fogao';
	$produtos[5] = 'geladeira';

	foreach($produtos as $produto){
		echo $produto.'<br />';

		if($produto == 'mesa'){
			echo 'Compre agora <br />';
		}
	}
?>