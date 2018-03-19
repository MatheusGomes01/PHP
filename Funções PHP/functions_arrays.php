<?
	/*
	isArray() - verifica se uma variavel é um array
	inArray() - verifica se um valor existe em um array
	Array_keys() - retorna todas as chaves de uma array
	sort() - ordena um array
	assort ()- Ordena um array, mantendo o índice / valor
	count () - Conta elementos de um array
	array_merge() - funde um ou mais arrays
	explode () - divide uma string baseado em um delimitador
	implode () - Junta elementos de um array em uma string
	*/


	//is_array
	/*$array = "string";
	$retorno = is_array($array);

	if($retorno){
		echo "true";
	}else{
		echo "false";
	}*/

	/*$array = array();
	$retorno = is_array($array);

	if($retorno){
		echo "true";
	}else{
		echo "false";
	}*/

	/*//in_array
	$array = array('mac', 'linux', 'windows');
	$retorno = in_array('mac', $array);

	if($retorno){
		echo "true";
	}else{
		echo "false";
	}*/

	/*//array_keys
	$produtos = array(10=>'Note', 11=>'tecladp');
	$keys = array_keys($produtos);

	var_export($keys)*/


	/*//sort
	$frutas = array(0=>'Pessego', 1=>'Uva', 2=>'Caçarola');
	sort($frutas);

	var_export($frutas)*/

	/*//asort
	$frutas = array(0=>'Pessego', 1=>'Uva', 2=>'Caçarola');
	asort($frutas);

	var_export($frutas)*/

	/*//count
	$frutas = array(0=>'Pessego', 1=>'Uva', 2=>'Caçarola');
	$itens_arrays = count($frutas);

	echo ($itens_arrays);*/

	/*//array_merge
	$array1 = array('mac', 'linux');
	$array2 = array('windows');
	$array3 = array('solaris');

	$novo_array = array_merge($array1, $array2, $array3);
	var_export($novo_array);*/

	//explode

	$string = "20/10/2020";
	$retorno = explode("/", $string);

	var_export($retorno);

	//implode

	$string2 = implode("/", $retorno);

	echo $string2;


?>