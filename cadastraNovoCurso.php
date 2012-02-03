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

$soapAction = "sistemaaula_course_create_courses"; 

$course1 = new stdClass();
												// Tipo,  tamanho, Opcional/Obrigatorio, Oservação
$course1->fullname = "Curso para teste Enrol";	// string,    254, Obrigatorio,          Nome Completo do Curso
$course1->shortname = "CPTE-1";					// string,    100, Obrigatorio,          Nome Curto, evite usar espaço, substitua os espaços por traço baixo (underscore)
$course1->categoryid  = "1";					// int, 	   10, Obrigatorio, 		 Id da categoria
												// deve ser conhecido o id conforme já cadastrado no moodle 
$course1->idnumber  = "axo.44d.1x";				// string,    100, Opcional,             Id universal do curso
$course1->summary  = "Este curso foi criado para teste do Enrol/Matricula de usuário via novo WebService do Aula";
												// string,     1K, Obrigatorio, 			 Sumário
$course1->visible  = "1";						// int,         1, Obrigatorio,             1: Disponível para estudante, 0:Não disponível
$course1->groupmode  = "1";						// int,         1, Obrigatorio,             Padrão para "0" //no group, separate, visible
$course1->format  = "weeks";					// string,      1, Obrigatorio,				Padrão para "weeks" //Formato do curso: weeks, topics, social, site,..
												// Atenção, no nosso caso devemos usar sempre Tópico.
/*
$course1->summaryformat  = "";	// int  Padrão para "0" //the summary text Moodle format
$course1->showgrades  = "";		// int  Padrão para "1" //1 if grades are shown, otherwise 0
$course1->newsitems  = "";		// int  Padrão para "5" //number of recent items appearing on the course page
$course1->startdate  = "";		// int  Opcional //timestamp when the course start
$course1->numsections  = "";	// int  Padrão para "10" //number of weeks/topics
$course1->maxbytes  = "";		// int  Padrão para "8388608" //largest size of file that can be uploaded into the course
$course1->showreports  = "";	// int  Padrão para "0" //are activity report shown (yes = 1, no =0)
$course1->hiddensections  = "";	// int  Padrão para "0" //How the hidden sections in the course are displayed to students
$course1->groupmodeforce  = "";	// int  Padrão para "0" //1: yes, 0: no
$course1->defaultgroupingid  = "";	// int  Padrão para "0" //default grouping id
$course1->enablecompletion  = "";	// int  Opcional //Enabled, control via completion and activity settings. Disabled,
									//not shown in activity settings.
$course1->completionstartonenrol  = "";	// int  Opcional //1: begin tracking a student's progress in course completion after
										// course enrolment. 0: does not
$course1->completionnotify  = "";		// int  Opcional //1: yes 0: no
$course1->lang  = "";					// string  Opcional //forced course language
$course1->forcetheme  = "";				// string  Opcional //name of the force theme

*/
$params = array(array($course1));

$serverurl = "$url?wstoken=$token&wsdl=1";

$client = new SoapClient($serverurl);
try {
	$resp = $client->__soapCall($soapAction, array($params));
} catch (Exception $e) {
	print_r($e);
}
print_r($resp);
