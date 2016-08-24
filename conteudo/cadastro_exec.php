
<?php include('../includes/server/modulos/cadastro_publico.php'); ?>

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

        <form action="" method="post" id="formCadastro">
            
            <fieldset>
                <legend>Identificação</legend>

                <label for="nome">Nome: <span class="obrigatorio">*</span></br>
                <strong><?= $GLOBALS['nome']; ?></strong>
                </label>

                <label for="cpf">CPF: <span class="obrigatorio">*</span></br>
                <strong><?= $GLOBALS['cpf']; ?></strong>
                </label>

                <label for="dtnasc">Data de Nascimento: <span class="obrigatorio">*</span></br>
                <strong><?= $GLOBALS['dtNasc']; ?></strong>
                </label>
            </fieldset>

            <fieldset>
                <legend>Endereço</legend>

                <label for="logradouro">Logradouro: <span class="obrigatorio">*</span></br>
               <strong><?= $GLOBALS['logradouro']; ?></strong>
                </label>

                <label for="numero">Numero: <span class="obrigatorio">*</span></br>
                <strong><?= $GLOBALS['numero']; ?></strong>
                </label>

                <label for="cidade">Cidade: <span class="obrigatorio">*</span></br>
                <strong><?= $GLOBALS['cidade']; ?></strong>
                </label>

                <label for="bairro">Bairro:</br>
                <strong><?= $GLOBALS['bairro']; ?></strong>
                </label>
            </fieldset>

            <fieldset>
                <legend>Acesso</legend>

                <label for="email">Digite seu email: <span class="obrigatorio">*</span></br>
                <strong><?= $GLOBALS['email']; ?></strong>
                </label>

                <label for="senha">Digite sua senha: <span class="obrigatorio">*</span></br>
                <strong><?= $GLOBALS['senha']; ?></strong>
                </label>

                <label for="confSenha">Confirme sua senha: <span class="obrigatorio">*</span></br>
                <strong><?= $_POST['txtconfSenha']; ?></strong>
                </label>

                <label for"ipUsu">Ip do Usuário: </br>
                <strong><?= $GLOBALS['ipUsu']?></strong>
                </label>

            </fieldset>
            <span class="obrigatorio">* Campos Obrigatórios</span> </br>
            
            <div id="divRetornoMsg"></div>
            
            <input type="button" value="Enviar" id="btnEnviar"/>            

        </form>

        
    </article>

   <?php  include('../includes/server/aside.php');  ?>
    
</div><!-- Fim da wrapper do main -->
</main>
 

 <?php  include('../includes/server/footer.php');  ?>

</body>
</html>
