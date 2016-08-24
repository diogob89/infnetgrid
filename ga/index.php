<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Projeto Infnet Grid - Login Área Administrativa</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Pragma" content="no-cache" /> 
<meta http-equiv="Cache-Control" content="no-cache" />
<meta name="author" content="Marcelo Torres - www.martorres.com.br" />
<meta name="keywords" content="infnet, infnetgrid, webmaster, javascript, php, ajax, jquery" />
<meta name="description" content="O Infnet Grid foi criado com a intenção que o aluno veja o desenvolvimento de um projeto desde o JS, passando pelo PHP, Ajax e finalizando no Jquery." />
<link href="../includes/css/style.css" type="text/css" rel="stylesheet" media="all"/>
<link href="../includes/css/font-awesome.min.css" rel="stylesheet"/>

</head>

<body>


<?
header("Expires: Mon, 12 Jul 2010 11:52:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
?>

<?

$UsuarioInvalid = "Usuário ou senha inválidos";

?>


<?php 

    include('../includes/server/header.php'); 
    include('../includes/server/nav.php'); 


?>


<main id="ga">
    <div class="wrapper">
        <h2>Login Área Administrativa</h2>
        <form action="login.php" method="POST">
            <fieldset>
                <legend>Dados de Acesso</legend>
                <label for="login">Digite seu Login:</label><br/>
                <input type="text" name="txtLogin" id="login"/><br/>

                <label for="senha">Digite sua Senha:</label><br/>
                <input type="password" name="txtSenha" id="senha"/><br/>
                
                <div id="divRetornoMsg"> 

                <?php

                //funcao isset pergunta se existe o parametro Se existir passa
                if(isset($_GET['msg'])){
                echo $_GET['msg'];
                }    

                 ?>

                 </div>
                
                <input type="submit" value="Enviar"/>

            </fieldset>
        </form>        
        
    </div><!-- Fim da wrapper do main -->
</main>

<?php  include('../includes/server/footer.php'); ?>

</body>
</html>
