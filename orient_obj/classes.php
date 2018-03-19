<?
	class Pessoa{

		//Atributo

		var $nome;

		//metodos //set, setar atributos
		function setNome($nome_definido){
			$this->nome = $nome_definido;
		}

		//get recupera valores do atributp
		function getNome(){
			return $this->nome;
		}
	}

	$pessoa = new Pessoa();
	$pessoa->setNome('Jamilton');

	echo $pessoa->getNome();
?>