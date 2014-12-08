<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-17 06:19:55 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant authview - assumed 'authview' ~ APPPATH/views/pageview.php [ 9 ] in /var/www/application/views/pageview.php:9
2014-11-17 06:19:55 --- DEBUG: #0 /var/www/application/views/pageview.php(9): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/applic...', 9, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/application/views/basic.php(38): Kohana_View->__toString()
#5 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#6 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/application/views/pageview.php:9
2014-11-17 06:20:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: authview ~ APPPATH/views/pageview.php [ 9 ] in /var/www/application/views/pageview.php:9
2014-11-17 06:20:18 --- DEBUG: #0 /var/www/application/views/pageview.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 9, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/application/views/basic.php(38): Kohana_View->__toString()
#5 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#6 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/application/views/pageview.php:9
2014-11-17 06:20:33 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH/views/pageview.php [ 9 ] in /var/www/application/views/pageview.php:9
2014-11-17 06:20:33 --- DEBUG: #0 /var/www/application/views/pageview.php(9): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/applic...', 9, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/application/views/basic.php(38): Kohana_View->__toString()
#5 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#6 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/application/views/pageview.php:9
2014-11-17 07:16:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '(', expecting variable (T_VARIABLE) or '$' ~ APPPATH/views/basic.php [ 36 ] in file:line
2014-11-17 07:16:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-17 07:16:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '(', expecting variable (T_VARIABLE) or '$' ~ APPPATH/views/basic.php [ 36 ] in file:line
2014-11-17 07:16:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line