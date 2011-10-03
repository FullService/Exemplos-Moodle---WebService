<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Teste de WebService Moodle</title>
</head>
<body>


<?php

require 'Zend/Soap/Client.php';
$host    = "http://192.168.0.38/";
$install = "moodlerooms/";
$service = "webservice/soap/server.php";

$url = "$host$install$service";

$token = "99b30439d03a76ec2383601c3174cb5d";

$soapAction = "sistemaaula_user_create_users"; // somente esta função está portada.


$user1 = new stdClass();
$user1->username = 'usuarioexemplo11';	//String 
$user1->password = 'Senha_1235r';		// 
$user1->firstname = 'Primeiro11';		//
$user1->lastname = 'Ultimo';			//
$user1->email = 'exemplo11@carlosdelfino.eti.br'; // String, obrigatoriamente um e-mail
// $user1->phone1 = '(31)98387171';		// Esta propriedade eu teste inserir, mas não é aceita
										// apenas as documentadas são passadas.  
$user1->auth = 'manual';				// String, metodo de autenticação, 
										// usar sempre "manual", 
										// podemos criar um metodo de 
										// autenticação padrão para o SistemaAula.
$user1->idnumber = '11305z0z0.a.as222';	// String, até 100 Caracteres, codigo unico que identifica o usuário no processo de integração.
$user1->lang = 'pt_br';					// String, Observe que está fora do padrão 
$user1->theme = 'standard';				// String, padrão para "starndard"
$user1->timezone = '-3';				// String, usar sempre -3, ou "America/Brazil"
$user1->mailformat = 1;					// Int, usar 0 para formato plano, ou 1 para formato HTML
$user1->description = 'Sou o cara 11 migrado do Sistema Aula usando nova função criada no webservice do sistema aula, para aqui e não onde estou.';
										// Descrição do usuário.
$user1->city = 'Belo Horizonte';
$user1->country = 'BR';					// String, país com duas letras, em maiúsculas.

/*
 * Não consigo ainda com sucesso com o uso dos campos personalizados.
 * 
 * Este para funcionarem devem ser usados 
 */
$customFields1 = array('type' => 'turma', 'value' => 'T-451');
$customFields2 = array('type' => 'unidade', 'value' => 'U-4');
$customFields3 = array('type' => 'codigo', 'value' => '10');

$user1->customfields = array(
	$customFields1,
	$customFields2,
	$customFields3
);

$params = array($user1);

$serverurl = "$url?wstoken=$token&wsdl=1";

$client = new SoapClient($serverurl);
try {
	$resp = $client->__soapCall($soapAction, array($params));
} catch (Exception $e) {
	print_r($e);
}
print_r($resp);
?>
</body>
</html>
