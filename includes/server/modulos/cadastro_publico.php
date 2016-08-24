<?php 

function RecuperaForm(){

	$GLOBALS['nome'] = $_POST['txtNome'];
	$GLOBALS['cpf'] = $_POST['txtCpf'];
	$GLOBALS['dtNasc'] = $_POST['txtDtNasc'];
	$GLOBALS['logradouro'] = $_POST['txtLogradouro'];
	$GLOBALS['numero'] = $_POST['txtNumero'];
	$GLOBALS['bairro'] = $_POST['txtBairro'];
	$GLOBALS['cidade'] = $_POST['txtCidade'];
	$GLOBALS['email'] = $_POST['txtEmail'];
	$GLOBALS['senha'] = $_POST['txtSenha'];
	$GLOBALS['ipUsu'] = $_POST['txtIpUsu'];

	}//fim da RecuperaForm

function ValidaDados (){


	$erro=0;

	if($GLOBALS['nome']==''){
		$GLOBALS['nome'].='Nome é obrigatório</br>';
		$erro++;
	}

		if($GLOBALS['cpf']==''){
		$GLOBALS['cpf'].='Cpf é obrigatório</br>';
		$erro++;
	}

		if($GLOBALS['dtNasc']==''){
		$GLOBALS['dtNasc'].='Data de nascimento é obrigatória</br>';
		$erro++;
	}

		if($GLOBALS['logradouro']==''){
		$GLOBALS['logradouro'].='Logradouro é Obrigatório</br>';
		$erro++;
	}

		if($GLOBALS['numero']==''){
		$GLOBALS['numero'].='Número é Obrigatório</br>';
		$erro++;
	}

		if($GLOBALS['cidade']==''){
		$GLOBALS['cidade'].='Cidade é Obrigatória</br>';
		$erro++;
	}

		if($GLOBALS['email']==''){
		$GLOBALS['email'].='Email é Obrigatório</br>';
		$erro++;
	}

		if($GLOBALS['senha']==''){
		$GLOBALS['senha'].='Senha é Obrigatória</br>';
		$erro++;
	}


	if($erro==0){
		return true;
	} else {
		return false;
	}

	//pode implementar assim tb:
	// return ($erro==0); pois irá retornar true ou false

}//fim da ValidaDados


	function Incluir() {

	
	if(!ValidaDados()){
	return false;	
	}

	//Instrução para inclusão no BD


}//fim da Incluir

RecuperaForm();
Incluir();

 ?>