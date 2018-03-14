<?
	function valida_login($login, $senha){

		//validar direto em um banco de dados
		$login_bd = 'matheus.ferreira';
		$senha_bd = '321';

		if($login == $login_bd && $senha == $senha_bd){
			return true;
		}

		return false;
	}
?>0