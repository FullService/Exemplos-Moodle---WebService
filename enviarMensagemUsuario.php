<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Teste de WebService Moodle</title>
</head>
<body>


<?php


$host    = "http://192.168.0.38/";
$install = "moodlerooms/";
$service = "webservice/soap/server.php";

$url = "$host$install$service";

$token = "99b30439d03a76ec2383601c3174cb5d";

$soapAction = "sistemaaula_message_send_instantmessages";

$msn = "Mensagem agora com o Jabber Ativo, será que vai?";

$message1 = new stdClass();
$message1->touserid			= 2;		// INT, 'id of the user to send the private message'),
$message1->text 			= $msn;
										// RAW, 'the text of the message - not that you can send anything it will be automatically cleaned to PARAM_TEXT and used againt MOODLE_FORMAT'),
$message1->clientmsgid	= "sa1211";	// ALPHANUMEXT, 'your own client id for the message. If this id is provided, the fail message id will be returned to you', VALUE_OPTIONAL),

$message2 = new stdClass();
$message2->touserid			= 27;		// INT, 'id of the user to send the private message'),
$message2->text 			= $msn;
// RAW, 'the text of the message - not that you can send anything it will be automatically cleaned to PARAM_TEXT and used againt MOODLE_FORMAT'),
$message2->clientmsgid	= "sa1213";	// ALPHANUMEXT, 'your own client id for the message. If this id is provided, the fail message id will be returned to you', VALUE_OPTIONAL),

$message3 = new stdClass();
$message3->touserid			= 22;		// INT, 'id of the user to send the private message'),
$message3->text 			= $msn;
										// RAW, 'the text of the message - not that you can send anything it will be automatically cleaned to PARAM_TEXT and used againt MOODLE_FORMAT'),
$message3->clientmsgid	= "sa1214";	// ALPHANUMEXT, 'your own client id for the message. If this id is provided, the fail message id will be returned to you', VALUE_OPTIONAL),

$message4 = new stdClass();
$message4->touserid			= 25;		// INT, 'id of the user to send the private message'),
$message4->text 			= $msn;
										// RAW, 'the text of the message - not that you can send anything it will be automatically cleaned to PARAM_TEXT and used againt MOODLE_FORMAT'),
$message4->clientmsgid	= "sa1212";	// ALPHANUMEXT, 'your own client id for the message. If this id is provided, the fail message id will be returned to you', VALUE_OPTIONAL),

$params = array($message1,$message2,$message3,$message4);

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
