<?
	//isset(), verifica se a variavel foi iniciada

/*$valor = 'matheus';

if(isset($valor)){
	echo 'iniciada';
}else{
	echo 'não iniciada';
}*/

//empty(), retorno true sempre que uma var estiver vazia ('', 0, '0', false, null ou array()), fora isso é false

/*$ex1 = '';

if(empty($ex1)){
	echo 'var vazia';
}else{
	echo 'var false';
}*/

//is_numeric(), testa se uma var é um numero ou uma string numerica

$ex2 = 'oi';

if(is_numeric($ex2)){
	echo 'é numero';
}else{
	echo 'não é numero';
}

/*****************************

<!-----------------------------------------NH4+
?>