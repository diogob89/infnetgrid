<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Projeto Infnet Grid - Cursos</title>

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

<?php 

    include('../includes/server/header.php'); 
    include('../includes/server/nav.php'); 


?>



<main id="cursos">
<div class="wrapper">
	    
    <article id="box-home">
    	<h2>Cursos Webmaster</h2>
        
    <div id="abas">
        <ul id="cursos">
            <li><a href="#javascript">Javascript</a></li>
            <li><a href="#php">PHP</a></li>
            <li><a href="#ajax">Ajax</a></li>
            <li><a href="#jquery">Jquery</a></li>
        </ul>

        <div id="javascript">
          <p><strong>JavaScript</strong> é uma linguagem de programação interpretada. Foi originalmente implementada como parte dos navegadores web para que scripts pudessem ser executados do lado do cliente e interagissem com o usuário sem a necessidade deste script passar pelo servidor, controlando o navegador, realizando comunicação assíncrona e alterando o conteúdo do documento exibido.</p>

          <p>É atualmente a principal linguagem para programação client-side em navegadores web. Começa também a ser bastante utilizada do lado do servidor através de ambientes como o node.js. Foi concebida para ser uma linguagem script com orientação a objetos baseada em protótipos, tipagem fraca e dinâmica e funções de primeira classe. Possui suporte à programação funcional e apresenta recursos como fechamentos e funções de alta ordem comumente indisponíveis em linguagens populares como Java e C++.</p>

          <p>É baseada em ECMAScript padronizada pela Ecma international nas especificações ECMA-2623 e ISO/IEC 16262.</p>
        </div><!--Fim #javascript-->

        <div id="php">
          <p><strong>PHP (um acrônimo recursivo para "PHP: Hypertext Preprocessor"</strong>, originalmente Personal Home Page) é uma linguagem interpretada livre, usada originalmente apenas para o desenvolvimento de aplicações presentes e atuantes no lado do servidor, capazes de gerar conteúdo dinâmico na World Wide Web.2 Figura entre as primeiras linguagens passíveis de inserção em documentos HTML, dispensando em muitos casos o uso de arquivos externos para eventuais processamentos de dados. O código é interpretado no lado do servidor pelo módulo PHP, que também gera a página web a ser visualizada no lado do cliente. A linguagem evoluiu, passou a oferecer funcionalidades em linha de comando, e além disso, ganhou características adicionais, que possibilitaram usos adicionais do PHP, não relacionados a web sites. É possível instalar o PHP na maioria dos sistemas operacionais, gratuitamente. Concorrente direto da tecnologia ASP pertencente à Microsoft, o PHP é utilizado em aplicações como o MediaWiki, Facebook, Drupal, Joomla, WordPress, Magento e o Oscommerce.</p>

          <p>Criado por Rasmus Lerdorf em 1995, o PHP tem a produção de sua implementação principal — referência formal da linguagem, mantida por uma organização chamada The PHP Group. O PHP é software livre, licenciado sob a PHP License, uma licença incompatível com a GNU General Public License (GPL) devido a restrições no uso do termo PHP.</p>
        </div><!--Fim #php-->

        <div id="ajax">
          <p><strong>AJAX (acrônimo em língua inglesa de Asynchronous Javascript and XML</strong> , em português "Javascript Assíncrono e XML") é o uso metodológico de tecnologias como Javascript e XML, providas por navegadores, para tornar páginas Web mais interativas com o usuário, utilizando-se de solicitações assíncronas de informações. Foi inicialmente desenvolvida pelo estudioso Jessé James Garret e mais tarde por diversas associações. Apesar do nome, a utilização de XML não é obrigatória (JSON é frequentemente utilizado) e as solicitações também não necessitam ser assíncronas.</p>
        </div> <!--Fim #ajax-->

        <div id="jquery">
          <p><strong>jQuery</strong> é uma biblioteca JavaScript cross-browser desenvolvida para simplificar os scripts client side que interagem com o HTML.1 Ela foi lançada em dezembro de 2006 no BarCamp de Nova York por John Resig. Usada por cerca de 77% dos 10 mil sites mais visitados do mundo, jQuery é a mais popular das bibliotecas JavaScript.</p>

          <p>jQuery é uma biblioteca de código aberto e possui licença dual, fazendo uso da Licença MIT ou da GNU General Public License versão 2.4 A sintaxe do jQuery foi desenvolvida para tornar mais simples a navegação do documento HTML, a seleção de elementos DOM, criar animações, manipular eventos e desenvolver aplicações AJAX. A biblioteca também oferece a possibilidade de criação de plugins sobre ela. Fazendo uso de tais facilidades, os desenvolvedores podem criar camadas de abstração para interações de mais baixo nível, simplificando o desenvolvimento de aplicações web dinâmicas de grande complexidade.</p>

          <p>A Microsoft e a Nokia anunciaram planos de incluir o jQuery em suas plataformas,5 a Microsoft adotando-a inicialmente no Visual Studio6 para uso com o framework AJAX do ASP.NET, e a Nokia na sua plataforma Web Run-Time de widgets.7 A biblioteca jQuery também tem sido usada no MediaWiki desde a versão 1.16.8</p>
        </div> <!--Fim #jquery-->

      
	</div><!--Fim #abas-->	
        
        
    </article>

  
 <?php 

  
    include('../includes/server/aside.php'); 

?>

</div><!-- Fim da wrapper do main -->
</main>

<?php  include('../includes/server/footer.php'); ?>

</body>
</html>
