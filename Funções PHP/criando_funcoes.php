<?

require_once("desconto.php");

	$valor_total = 800;
	$desconto = 10;

	$valor_com_desconto = calcula($valor_total, $desconto);
?>

Valor Total: R$ <? echo $valor_total?><br />
Valor Desconto: <? echo $desconto ?><br />
Valor total comdesconto: R$  <? echo $valor_com_desconto ?>0