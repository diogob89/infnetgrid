<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Projeto Infnet Grid - Fale Conosco</title>

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


<main id="faleconosco">
    <div class="wrapper">

     <article id="box-home">

        <h2>Fale Conosco</h2>
        
        <form action="" method="POST" id="formFaleConosco">
        	<fieldset>
                <legend>Mensagem</legend>
                <label for="nome">Nome:<span class="obrigatorio">*</span><br/>
               <strong><?= $_POST['txtNome']; ?></strong>
                </label><br/>
                
                <label for="email">Email:<span class="obrigatorio">*</span><br/>
               <strong><?= $_POST['txtEmail']; ?></strong>
               </label><br/>
                
                <label for="assunto">Assunto:<br/>
                <strong><?= $_POST['txtAssunto']; ?></strong>
                </select>
                </label><br/>
                
                <label for="msg">Mensagem:<span class="obrigatorio">*</span><br/>
                <strong><?= $_POST['txtMsg']; ?></strong>
                </label><br/>
            
            </fieldset>
            
            <span class="obrigatorio">* Campos Obrigatórios</span> </br>
            
            <div id="divRetornoMsg"></div>

            <input type="submit" value="Enviar" id=""/>
            
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
