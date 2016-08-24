<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Projeto Infnet Grid - Cadastro</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Pragma" content="no-cache" /> 
<meta http-equiv="Cache-Control" content="no-cache" />
<meta name="author" content="Marcelo Torres - www.martorres.com.br" />
<meta name="keywords" content="infnet, infnetgrid, webmaster, javascript, php, ajax, jquery" />
<meta name="description" content="O Infnet Grid foi criado com a intenção que o aluno veja o desenvolvimento de um projeto desde o JS, passando pelo PHP, Ajax e finalizando no Jquery." />
<link href="../includes/css/style.css" type="text/css" rel="stylesheet" media="all"/>
<link href="../includes/css/font-awesome.min.css" rel="stylesheet"/>
<script type="text/javascript" src="../includes/js/funcoes.js"></script>
</head>

<body>

<?php 

    include('../includes/server/header.php'); 
    include('../includes/server/nav.php'); 


?>


<main id="cadastro">
<div class="wrapper">
	    
    <article id="box-home">
    	<h2>Cadastro do Aluno</h2>

        <form action="cadastro_exec.php" method="post" id="formCadastro">
            
            <fieldset>
                <legend>Identificação</legend>

                <label for="nome">Nome: <span class="obrigatorio">*</span></br>
                <input type="text" name="txtNome" id="nome" />
                </label>

                <label for="cpf">CPF: <span class="obrigatorio">*</span></br>
                <input type="text" name="txtCpf" id="cpf" onfocus="TrataFoco('cpf');" onblur="TrataSaida('cpf',true);"/>
                </label>

                <label for="dtnasc">Data de Nascimento: <span class="obrigatorio">*</span></br>
                <input type="text" name="txtDtNasc" id="dtNasc" onfocus="TrataFoco('dtNasc');" onblur="TrataSaida('dtNasc',true);"/>
                </label>
            </fieldset>

            <fieldset>
                <legend>Endereço</legend>

                <label for="logradouro">Logradouro: <span class="obrigatorio">*</span></br>
                <input type="text" name="txtLogradouro" id="logradouro" onfocus="TrataFoco('logradouro');" onblur="TrataSaida('logradouro',true);"/>
                </label>

                <label for="numero">Numero: <span class="obrigatorio">*</span></br>
                <input type="text" name="txtNumero" id="numero" onfocus="TrataFoco('numero');" onblur="TrataSaida('numero',true);"/>
                </label>

                <label for="cidade">Cidade: <span class="obrigatorio">*</span></br>
                <input type="text" name="txtCidade" id="cidade" onfocus="TrataFoco('cidade');" onblur="TrataSaida('cidade',true);"/>
                </label>

                <label for="bairro">Bairro:</br>
                <input type="text" name="txtBairro" id="bairro" onfocus="TrataFoco('bairro');" onblur="TrataSaida('bairro',false);"/>
                </label>
            </fieldset>

            <fieldset>
                <legend>Acesso</legend>

                <label for="email">Digite seu email: <span class="obrigatorio">*</span></br>
                <input type="text" name="txtEmail" id="email" onfocus="TrataFoco('email');" onblur="TrataSaida('email',true);"/>
                </label>

                <label for="senha">Digite sua senha: <span class="obrigatorio">*</span></br>
                <input type="password" name="txtSenha" id="senha" onfocus="TrataFoco('senha');" onblur="TrataSaida('senha',true);"/>
                </label>

                <label for="confSenha">Confirme sua senha: <span class="obrigatorio">*</span></br>
                <input type="password" name="txtconfSenha" id="confSenha" onfocus="TrataFoco('confSenha');" onblur="TrataSaida('confSenha',true);"/>
                </label>

                <label for"ipUsu">Ip do Usuário: </br>
                <input type="text" readonly name="txtIpUsu" id="ipUsu" value="<?= $_SERVER['REMOTE_ADDR'] ?>"/>
                </label>

            </fieldset>
            <span class="obrigatorio">* Campos Obrigatórios</span> </br>
            
            <div id="divRetornoMsg"></div>
            
            <input type="button" value="Enviar" id="btnEnviar"/>            

        </form>

        
    </article>

 <?php 

  
    include('../includes/server/aside.php'); 

?>
    
</div><!-- Fim da wrapper do main -->
</main>

<?php  include('../includes/server/footer.php'); ?>

</body>
</html>
