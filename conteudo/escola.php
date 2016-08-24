<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Projeto Infnet Grid - A Escola</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Pragma" content="no-cache" /> 
<meta http-equiv="Cache-Control" content="no-cache" />
<meta name="author" content="Marcelo Torres - www.martorres.com.br" />
<meta name="keywords" content="infnet, infnetgrid, webmaster, javascript, php, ajax, jquery" />
<meta name="description" content="O Infnet Grid foi criado com a intenção que o aluno veja o desenvolvimento de um projeto desde o JS, passando pelo PHP, Ajax e finalizando no Jquery." />
<link href="../includes/css/style.css" type="text/css" rel="stylesheet" media="all"/>
<link href="../includes/css/font-awesome.min.css" type="text/css" rel="stylesheet" >

</head>

<body>

<?php 

    include('../includes/server/header.php'); 
    include('../includes/server/nav.php'); 


?>


<main id="escola">
<div class="wrapper">
	    
    <article id="box-home">
    	<h2>O Instituto Infnet</h2>
        <p>O Infnet é um Instituto de Tecnologia fundado em 1994 que se tornou referência na formação de profissionais em Tecnologia da Informação, Negócios e para a Indústria Criativa</p>
        
		<p>O ensino de excelência voltado para as necessidades do mercado é a característica mais marcante do Instituto Infnet. Essa junção de "orientação ao mercado" com "excelência de ensino" é algo raro no Brasil. Normalmente, encontramos cursos que, quando de excelência, são desconectados das necessidades das empresas e organizações, como é o caso da maioria das instituições públicas ou confessionais.</p>
        
		<p>A proposta do Instituto vai além do ensino da tecnologia em si, mas da tecnologia aplicada ao contexto de negócios, isto é, como uma ferramenta para o desenvolvimento das organizações nas quais ela é utilizada. Além disso, sendo ele próprio um case, o Infnet busca formar uma mentalidade empreendedora em seus alunos.</p>

		<p>Ao longo de sua trajetória, o Instituto foi agraciado com diversos prêmios, pela revista Você S/A, pela Microsoft, pela Assespro e outros. Em geral, os prêmios foram um reconhecimento da qualidade do ensino e do espírito empreendedor da Instituição.</p>
        <div id="galeria">
        	<ul>
            	<li><a href="../img/escola01.jpg"><img src="../img/escola01-thumb.jpg" alt="Foto Escola 01"></a></li>
                <li><a href="../img/escola02.jpg"><img src="../img/escola02-thumb.jpg" alt="Foto Escola 02"></a></li>
                <li><a href="../img/escola03.jpg"><img src="../img/escola03-thumb.jpg" alt="Foto Escola 03"></a></li>
            </ul>	
        </div>

		<p>Em um universo de instituições com práticas arcaicas de gestão, o Infnet quer se tornar um exemplo no cenário do ensino superior brasileiro aplicando uma gestão meritocrática, práticas concorrenciais limpas e inovação permanente.</p>
        
    </article>

     <?php 

  
    include('../includes/server/aside.php'); 

?>
</div><!-- Fim da wrapper do main -->
</main>
<?php  include('../includes/server/footer.php'); ?>

</body>
</html>
