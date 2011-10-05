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

$soapAction = "sistemaaula_enrol_manual_enrol_users";

$enrolments = new stdClass();// external_multiple_structure

$enrolments->roleid = "5";	// INT, 'Role to assign to the user'),
							// para nossa instalação, 5 é o id de estudante.
$enrolments->userid = "30";	// INT, 'The user that is going to be enrolled'),
$enrolments->courseid = "8";	// INT, 'The course to enrol the user role in'),
/*
$enrolments->timestart =	// INT, 'Timestamp when the enrolment start', VALUE_OPTIONAL),
$enrolments->timeend = 	// INT, 'Timestamp when the enrolment end', VALUE_OPTIONAL),
$enrolments->suspend = 	// INT, 'set to 1 to suspend the enrolment', VALUE_OPTIONAL)
*/

$params = array($enrolments);

$serverurl = "$url?wstoken=$token&wsdl=1";

$client = new SoapClient($serverurl);
try {
	$resp = $client->__soapCall($soapAction, array($params));
} catch (Exception $e) {
	print_r($e);
}
print_r($resp);