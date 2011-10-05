
INSERT  IGNORE INTO `mdl_external_functions`
SET  
`name`			= 'sistemaaula_user_create_users', 
`classname`		= 'sistemaaula_user_external', 
`methodname`	= 'create_users', 
`classpath`		= 'SistemaAula/user/externallib.php',
`component`		= 'sistemaaula',
`capabilities`	= 'moodle/user:create';

INSERT  IGNORE INTO `mdl_external_functions`
SET  
`name`			= 'sistemaaula_course_create_courses', 
`classname`		= 'sistemaaula_course_external', 
`methodname`	= 'create_courses', 
`classpath`		= 'SistemaAula/course/externallib.php',
`component`		= 'sistemaaula',
`capabilities`	= 'moodle/course:create,moodle/course:visibility';

INSERT  IGNORE INTO `mdl_external_functions`
SET  
`name`			= 'sistemaaula_enrol_manual_enrol_users', 
`classname`		= 'sistemaaula_enrol_external', 
`methodname`	= 'manual_enrol_users', 
`classpath`		= 'SistemaAula/enrol/externallib.php',
`component`		= 'sistemaaula_enrol_manual',
`capabilities`	= 'enrol/manual:enrol';

INSERT  IGNORE INTO `mdl_external_functions`
SET  
`name`			= 'sistemaaula_message_send_instantmessages', 
`classname`		= 'sistemaaula_message_external', 
`methodname`	= 'send_instantmessages', 
`classpath`		= 'SistemaAula/message/externallib.php',
`component`		= 'sistemaaula',
`capabilities`	= 'moodle/site:sendmessage';