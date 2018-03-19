<?

	/*//data = Y - m - d
	echo $date = date("d/m/Y H:i:s <br><br>");*/


	//strtotime
	$data_inicial = '2015-04-02';
	$data_final = '2015-04-05';

	$time_inicial = strtotime($data_inicial);
	$time_final = strtotime($data_final);


	$datas_times = $time_final - $time_inicial;
	echo $datas_times;

	$dia_segundos = 24*60*60;
	$diferença_dias = $datas_times  / $dia_segundos;
	echo $diferença_dias;
?>