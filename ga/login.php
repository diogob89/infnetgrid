//recuperar informacao que veio do form
//se o email webmaster@infetgrid.dev 
//e senha 12345
//redirecionar para a pasta restrito que esta dentro do ga
//senao vao redirecionar para o form de login
//com uma msg Usuários/senha inválidos


<?php

header("Expires: Mon, 12 Jul 2010 11:52:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");


$login = $_POST['txtLogin'];
$senha = $_POST['txtSenha'];


if ($login == "webmaster@infnetgrid.dev" && $senha ==12345 ) {

header ("Location: restrito");

} else {
//retorno para o indice passando valores pela URL (no caso msg de erro)
header ("Location: index.php?msg=Usuário/senha inválidos");

}

?>