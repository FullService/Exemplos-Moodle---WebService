<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Teste de WebService Moodle</title>
</head>
<body>

<?php


require 'lib/esqueletowebservice.php';


// grupo de informações para acesso ao servidor
$host    = "www.carlosdelfino.eti.br";
$install = "ead";

$token = "99b30439d03a76ec2383601c3174cb5d";
$token = "8a2d8585b5b5720be91861617d0804b2";

// grupo de informações solicitadas para execução do serviço
$action = "moodle_user_create_users"; 

$user1 = new stdClass();
										// Tipo, tamanho, Opcional/Obrigatorio, Oservação
$user1->username  = 'delfino33';		// String, 100, Obrigatorio  
$user1->password  = 'Senha_1235r';		// String, 32,  Obrigatorio
$user1->firstname = 'Primeiro33';		// String, 100, Obrigatorio
$user1->lastname  = 'Ultimo';			// String, 100, Obrigatorio
$user1->email     = 'exemplo33@carlosdelfino.eti.br';  
										// String, 100, Obrigatorio, e-mail
// $user1->phone1 = '(31)98387171';		// Esta propriedade eu teste inserir, mas não é aceita
										// apenas as documentadas e registradas no WebService são aceitas.  
$user1->auth = 'manual';				// String, manual, ldap, imap, método de autenticação, 
										// usar sempre "manual",
										// podemos criar um metodo de autenticação padrão para o SistemaAula.
$user1->idnumber = '33305z0z0.a.as222';	// String, 100, codigo único que identifica o usuário naintegração.
$user1->lang     = 'pt_br';				// String, 30, Observe que está fora do padrão 
$user1->theme    = 'standard';			// String, 50, padrão para "starndard"
$user1->timezone = '-3';				// String, 100, usar sempre -3, ou "America/Brazil"
$user1->mailformat  = 1;				// Int, 1, usar 0 para formato plano, ou 1 para formato HTML
$user1->description = 'Sou o usuário 33 migrado do Sistema Aula usando nova função criada no webservice.';
										// String, 1K, Descrição do usuário.
$user1->city     = 'Belo Horizonte';	// String, 120, Cidade
$user1->country  = 'BR';				// String, 2, país com duas letras, em maiúsculas.
/*
 * Os custom fields funcionam bem, 
 * mas devem ser criados no moodle antes de serem usados. 
 */
$customFields1 = array('type' => 'turma',   'value' => 'T-221');
$customFields2 = array('type' => 'unidade', 'value' => 'U-2');
$customFields3 = array('type' => 'codigo',  'value' => '33');

$user1->customfields = array(
	$customFields1,
	$customFields2,
	$customFields3
);

$param = array(array($user1));
$resp = callService($host,$install, $token, $action, $param);

print_r($resp);

?>
</body>
</html>
