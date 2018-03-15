<?

 	if( isset($_POST['nome']) && empty( $_POST['nome'] ) ){
		echo 'Preencher Nome <br>';
	}

	if( isset($_POST['cpf']) && empty( $_POST['cpf'] ) ){
		echo 'Preencher Nome <br>';
	}

	if( isset($_POST['cpf']) && !is_numeric( $_POST['cpf'] ) ){
		echo 'Apenas numeros no CPF <br>';
	}



?>

<form method="post" action="">
	<label>Nome*:
	<input type="text" name="nome">
	</label>
	<label>
		CPF*:
		<input type="text" name="cpf">
	</label>

	<button type="submit" value="finalizar">Enviar</button>
</form>