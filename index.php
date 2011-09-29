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

$soapAction = "moodle_user_create_users";


$user1 = new stdClass();
$user1->username = 'usuarioexemplo3';
$user1->password = 'Senha_1235r';
$user1->firstname = 'Primeiro2';
$user1->lastname = 'Ultimo';
$user1->email = 'exemplo2@carlosdelfino.eti.br';
$user1->auth = 'manual';
$user1->idnumber = '3309z0z0.a.as222';
//$user1->lang = 'pt-BR';
$user1->theme = 'standard';
//$user1->timezone = '-3';
//$user1->mailformat = 0;
//$user1->description = 'Sou o cara  migrado do Sistema Aula para aqui e não onde estou.';
//$user1->city = 'Belo Horizonte';
$user1->country = 'br';
/*
$preferencename1 = array('type' => 'turma', 'value' => 'T-451');
$preferencename2 = array('type' => 'unidade', 'value' => 'U-4');

$user1->preferences = array(
	$preferencename1,
	$preferencename2
);
*/
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
