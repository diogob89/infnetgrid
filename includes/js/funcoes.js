/*
Projeto InfnetGrid
Curso WebMaster 2015
Versão: 1.0 - 20/06/2015
Arquivo de Funções de Validação do Formulário de Cadastro
*/

//Mensagens de Validação
var _NomeObrigatorio = 'Campo Nome Obrigatório.';
var _CpfObrigatorio = 'Campo CPF Obrigatório';
var _DtNascObrigatorio = 'Campo Data de Nascimento Obrigatório.';
var _LogradouroObrigatorio = 'Campo Logradouro Obrigatório.';
var _NumeroObrigatorio = 'Campo Número Obrigatório.';
var _CidadeObrigatorio = 'Campo Cidade Obrigatório.';
var _EmailObrigatorio = 'Campo Email Obrigatório';
var _SenhaObrigatorio = 'Campo Senha Obrigatório';
var _ConfirmaSenhaObrigatorio = 'Campo Confirma a Senha Obrigatório';
var _SenhaDiferenteObrigatorio = 'Senhas Diferentes';
var _CpfInvalido = 'CPF Inválido';
var _NumeroInvalido = 'Número Inválido';
var _EmailInvalido = 'Email Inválido';
var _DtNascInvalida = 'Data de Nascimento Inválida';


//Função onload de Carregamento da Página
onload = function() {
	
	document.getElementById('btnEnviar').onclick = function() {		
		//Chamo a função ValidaCadastro()
		if(ValidaCadastro()){
			document.getElementById('formCadastro').submit();	
		}		
	}//fim do onclick do btnEnviar
	
	gebi('nome').onfocus = function() {
		TrataFoco('nome');	
	}
	gebi('nome').onblur = function() {
		TrataSaida('nome',true);	
	}	
	
}//fim do onload

function TrataSaida(pIdElemento, obrigatorio) {
	if((gebi(pIdElemento).value == '')&&(obrigatorio)){
		gebi(pIdElemento).className = 'destacaRequerido';
	} else {	
		gebi(pIdElemento).className = 'destacaNormal';
	}
}//fim do TrataSaida

function TrataFoco(pIdElemento){
	gebi(pIdElemento).className = 'destacaFocus';
}//fim do TrataFoco

function gebi(pId) {
	return document.getElementById(pId);
}//fim da function gebi

//Função de Validação dos dados
//do formulário de Cadastro
function ValidaCadastro() {
	
	var msgAlert = '';
	var msgErroHtml = '';
	
	var nome = document.getElementById('nome').value;
	if(nome == '') {
		msgAlert += _NomeObrigatorio + '\n';
		msgErroHtml += _NomeObrigatorio + '<br/>';
	}
	
	var cpf = document.getElementById('cpf').value;
	if(cpf == '') {
		msgAlert += _CpfObrigatorio + '\n';
		msgErroHtml += _CpfObrigatorio + '<br/>';
	} else if(isNaN(cpf)){
		msgAlert += _CpfInvalido + '\n';
		msgErroHtml += _CpfInvalido + '<br/>';
	} else if(!ValidaCpf(cpf)) {
		msgAlert += _CpfInvalido + '\n';
		msgErroHtml += _CpfInvalido + '<br/>';
	}
	
	var dtNasc = document.getElementById('dtNasc').value;
	if(dtNasc == '') {
		msgAlert += _DtNascObrigatorio + '\n';
		msgErroHtml += _DtNascObrigatorio + '<br/>';
	} else if(!ValidaDtNasc(dtNasc)){
		msgAlert += _DtNascInvalida + '\n';
		msgErroHtml += _DtNascInvalida + '<br/>';
	}
	
	var logradouro = document.getElementById('logradouro').value;
	if(logradouro == '') {
		msgAlert += _LogradouroObrigatorio + '\n';
		msgErroHtml += _LogradouroObrigatorio + '<br/>';
	}
	
	var numero = document.getElementById('numero').value;
	if(numero == '') {
		msgAlert += _NumeroObrigatorio + '\n';
		msgErroHtml += _NumeroObrigatorio + '<br/>';
	} else if(isNaN(numero)){
		msgAlert += _NumeroInvalido + '\n';
		msgErroHtml += _NumeroInvalido + '<br/>';
	}
	
	var cidade = document.getElementById('cidade').value;
	if(cidade == '') {
		msgAlert += _CidadeObrigatorio + '\n';
		msgErroHtml += _CidadeObrigatorio + '<br/>';
	}
	
	var email = document.getElementById('email').value;
	if(email == '') {
		msgAlert += _EmailObrigatorio + '\n';
		msgErroHtml += _EmailObrigatorio + '<br/>';
	} else if (!ValidaEmail(email)) {
		msgAlert += _EmailInvalido + '\n';
		msgErroHtml += _EmailInvalido + '<br/>';
	}
	
	var senha = document.getElementById('senha').value;
	if(senha == '') {
		msgAlert += _SenhaObrigatorio + '\n';
		msgErroHtml += _SenhaObrigatorio + '<br/>';
	}
	
	var confSenha = document.getElementById('confSenha').value;
	if(confSenha == '') {
		msgAlert += _ConfirmaSenhaObrigatorio + '\n';
		msgErroHtml += _ConfirmaSenhaObrigatorio + '<br/>';
	} else if (senha != confSenha) {
		msgAlert += _SenhaDiferenteObrigatorio + '\n';
		msgErroHtml += _SenhaDiferenteObrigatorio + '<br/>';
	}
	
	//Testo se houve erro durante a validação
	//Retorno False se houver erro e imprimo as msg de validação
	if(msgAlert != ''){
		alert(msgAlert);
		document.getElementById('divRetornoMsg').innerHTML = msgErroHtml;
		return false;
	}
	
	//Passei por todas as validação implementadas
	return true;
	
}//fim da funcao ValidaCadastro()

function ValidaCpf(pCpf) {
	//pCpf possui o valor do CPF que foi passado por parâmetro
	
	//testo se o CPF não possui 11 digitos 
	if((pCpf.length != 11)||(pCpf ==12345678909)){
		return false;
	}
	
	//testo se o número digitado é um número inválido de CPF
	
	for (var i=00000000000;i<=99999999999;i=i+11111111111) {
		if(pCpf == i){
			return false;
		}
	}
	
	//Calculo do 1º Digito Verificador
	//012345678910
	var soma = 0;
	for (var i = 0;i<=8;i++){
		soma = soma + pCpf.charAt(i)*(10-i);
	}
	
	var resto = soma % 11;
	if(resto < 2){
		var dv1 = 0;	
	} else {
		var dv1	= 11 - resto;
	}
	
	//Testo se o dv1 encontrado é igual ao digitado
	if(dv1 != pCpf.charAt(9)){
		return false;
	}
	
	//Calculo do 2º Digito Verificador
	var soma = ((pCpf.charAt(0)*11) +
				(pCpf.charAt(1)*10) +
				(pCpf.charAt(2)*9) +
				(pCpf.charAt(3)*8) +
				(pCpf.charAt(4)*7) +
				(pCpf.charAt(5)*6) +
				(pCpf.charAt(6)*5) +
				(pCpf.charAt(7)*4) +
				(pCpf.charAt(8)*3) +
				(pCpf.charAt(9)*2) );
	
	var resto = soma % 11;
	if(resto < 2){
		var dv2 = 0;	
	} else {
		var dv2	= 11 - resto;
	}
	
	//Testo se o dv1 encontrado é igual ao digitado
	if(dv2 != pCpf.charAt(10)){
		return false;
	}
	
	//passou por todas as validações	
	return true;
	
}//fim da funçãoo ValidaCpf


function ValidaEmail(pEmail) {
	
	var posArroba = pEmail.indexOf('@');
	var posPonto = pEmail.indexOf('.',posArroba);
	
	//testo se existe arroba
	if(posArroba == -1) {
		return false;
	}
	
	//testo se o arroba é primeiro ou o último caractere
	if((posArroba == 0)||(posArroba == pEmail.length-1)) {
		return false;
	}
	
	//testo se tem um ponto depois arroba
	if((posPonto == -1)) {
		return false;
	}
	
	//testo se tem um ponto seguido do arroba @. 
	//ou se o ponto é o último caracteres
   if((posPonto == posArroba+1)||(posPonto == pEmail.length-1)) {
		return false;
	}
	
	//Passou por todas as validações
	return true;
	
	
}//fim do ValidaEmail

function ValidaDtNasc(pDtNasc){
	//0123456789
	//01/03/1990
	//Recupero o ano de nascimento digitado
	var anoNasc = pDtNasc.substring(6);	
	//crio um objeto de Date
	var dataAtual = new Date();//new Date().getFullYear();
	//Recupero o ano Atual
	var anoAtual = dataAtual.getFullYear();
	//Calculo a idade
	var idade = anoAtual - anoNasc;
	
	//testo se é menor de 14 anos
	if (idade <= 14){
		return false;
	}
	//passou por todas as validações
	return true;
	
}//fim da function validaDtNasc


function ValidaFaleConosco(){
	var msg="";
	document.getElementById("divDadosIncorretos").innerHTML=msg;	
	
	if (document.getElementById("nome").value=="") {
		msg+="Nome é campo obrigatório<br />";
	}
	
	var email = document.getElementById("email").value;
	if (email=="") {
		msg+="E-mail é campo obrigatório<br />";
	}
	else if (!ValidaEmail(email)){
		msg+="E-mail inválido<br />";
	}
	
	if (document.getElementById("msg").value=="") {
		msg+="Mensagem é campo obrigatório<br />";
	}

	if (msg!=""){
	    alert('Dados invalidados. Verifique e corrija.');
		document.getElementById("divRetornoMsg").innerHTML=msg;	
		return false;
	}

	return true;
}









