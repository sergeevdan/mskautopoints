<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-23 05:10:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content2 ~ APPPATH/views/basic.php [ 19 ] in /var/www/application/views/basic.php:19
2014-10-23 05:10:36 --- DEBUG: #0 /var/www/application/views/basic.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 19, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/views/basic.php:19
2014-10-23 05:33:11 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant View - assumed 'View' ~ APPPATH/classes/Controller/Auth.php [ 48 ] in /var/www/application/classes/Controller/Auth.php:48
2014-10-23 05:33:11 --- DEBUG: #0 /var/www/application/classes/Controller/Auth.php(48): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/applic...', 48, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Auth->action_reg()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Auth.php:48
2014-10-23 05:33:23 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant View - assumed 'View' ~ APPPATH/classes/Controller/Auth.php [ 48 ] in /var/www/application/classes/Controller/Auth.php:48
2014-10-23 05:33:23 --- DEBUG: #0 /var/www/application/classes/Controller/Auth.php(48): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/applic...', 48, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Auth->action_reg()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Auth.php:48
2014-10-23 05:33:24 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant View - assumed 'View' ~ APPPATH/classes/Controller/Auth.php [ 48 ] in /var/www/application/classes/Controller/Auth.php:48
2014-10-23 05:33:24 --- DEBUG: #0 /var/www/application/classes/Controller/Auth.php(48): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/applic...', 48, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Auth->action_reg()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Auth.php:48
2014-10-23 05:33:26 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant View - assumed 'View' ~ APPPATH/classes/Controller/Auth.php [ 48 ] in /var/www/application/classes/Controller/Auth.php:48
2014-10-23 05:33:26 --- DEBUG: #0 /var/www/application/classes/Controller/Auth.php(48): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/applic...', 48, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Auth->action_reg()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Auth.php:48
2014-10-23 06:03:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ']' ~ APPPATH/classes/Controller/Auth.php [ 56 ] in file:line
2014-10-23 06:03:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-23 06:03:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ']' ~ APPPATH/classes/Controller/Auth.php [ 56 ] in file:line
2014-10-23 06:03:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-23 06:03:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/Controller/Auth.php [ 63 ] in file:line
2014-10-23 06:03:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-23 06:03:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/regview.php [ 26 ] in file:line
2014-10-23 06:03:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-23 06:05:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '==' (T_IS_EQUAL), expecting ',' or ')' ~ APPPATH/views/regview.php [ 5 ] in file:line
2014-10-23 06:05:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line