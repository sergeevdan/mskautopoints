<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-03 10:16:46 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'kohana.usefuls' doesn't exist [ SHOW FULL COLUMNS FROM `usefuls` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/MySQL.php:359
2014-12-03 10:16:46 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('usefuls')
#2 /var/www/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/application/classes/Model/Register.php(10): Kohana_ORM->__construct()
#6 /var/www/application/classes/Controller/Main.php(48): Model_Register->reg('s-d-1', '913@sergeevdan....', '4155246', 1)
#7 /var/www/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/modules/database/classes/Kohana/Database/MySQL.php:359
2014-12-03 10:24:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/Model/Useful.php [ 9 ] in file:line
2014-12-03 10:24:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 10:25:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/Model/Useful.php [ 9 ] in file:line
2014-12-03 10:25:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 10:36:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/Model/Useful.php [ 9 ] in file:line
2014-12-03 10:36:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 10:44:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/Model/Useful.php [ 10 ] in file:line
2014-12-03 10:44:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 10:46:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/Model/Useful.php [ 9 ] in file:line
2014-12-03 10:46:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 10:49:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/Model/Useful.php [ 9 ] in file:line
2014-12-03 10:49:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 10:51:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/Model/Useful.php [ 9 ] in file:line
2014-12-03 10:51:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 10:57:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/Model/Useful.php [ 9 ] in file:line
2014-12-03 10:57:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 11:11:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/Model/Register.php [ 12 ] in file:line
2014-12-03 11:11:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 11:12:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/Model/Register.php [ 12 ] in file:line
2014-12-03 11:12:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 11:12:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/Model/Register.php [ 12 ] in file:line
2014-12-03 11:12:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 11:12:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/Model/Useful.php [ 9 ] in file:line
2014-12-03 11:12:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 11:15:31 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/email/classes/email.php [ 34 ] in file:line
2014-12-03 11:15:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 11:16:02 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/email/classes/email.php [ 34 ] in file:line
2014-12-03 11:16:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 11:16:33 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/Model/Register.php [ 11 ] in file:line
2014-12-03 11:16:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 11:19:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/Model/Register.php [ 33 ] in file:line
2014-12-03 11:19:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 11:20:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/basic.php [ 124 ] in /var/www/application/views/basic.php:124
2014-12-03 11:20:54 --- DEBUG: #0 /var/www/application/views/basic.php(124): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 124, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/views/basic.php:124
2014-12-03 11:21:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/basic.php [ 124 ] in /var/www/application/views/basic.php:124
2014-12-03 11:21:08 --- DEBUG: #0 /var/www/application/views/basic.php(124): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 124, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/views/basic.php:124
2014-12-03 11:21:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/basic.php [ 124 ] in /var/www/application/views/basic.php:124
2014-12-03 11:21:10 --- DEBUG: #0 /var/www/application/views/basic.php(124): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 124, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/views/basic.php:124
2014-12-03 11:21:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/basic.php [ 124 ] in /var/www/application/views/basic.php:124
2014-12-03 11:21:34 --- DEBUG: #0 /var/www/application/views/basic.php(124): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 124, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/views/basic.php:124