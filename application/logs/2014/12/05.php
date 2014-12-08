<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-05 10:15:48 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/basic.php [ 97 ] in file:line
2014-12-05 10:15:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-05 10:16:44 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/views/basic.php [ 97 ] in /var/www/application/views/basic.php:97
2014-12-05 10:16:44 --- DEBUG: #0 /var/www/application/views/basic.php(97): Kohana_Core::error_handler(2, 'Creating defaul...', '/var/www/applic...', 97, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/views/basic.php:97
2014-12-05 10:16:53 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/views/basic.php [ 97 ] in /var/www/application/views/basic.php:97
2014-12-05 10:16:53 --- DEBUG: #0 /var/www/application/views/basic.php(97): Kohana_Core::error_handler(2, 'Creating defaul...', '/var/www/applic...', 97, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/views/basic.php:97
2014-12-05 10:18:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: testview ~ APPPATH/views/basic.php [ 97 ] in /var/www/application/views/basic.php:97
2014-12-05 10:18:35 --- DEBUG: #0 /var/www/application/views/basic.php(97): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 97, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/views/basic.php:97
2014-12-05 10:18:51 --- EMERGENCY: View_Exception [ 0 ]: The requested view testview.php could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2014-12-05 10:18:51 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('testview.php')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('testview.php', Array)
#2 /var/www/application/views/basic.php(97): Kohana_View::factory('testview.php', Array)
#3 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#4 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#5 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#9 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/system/classes/Kohana/View.php:137
2014-12-05 10:22:47 --- EMERGENCY: View_Exception [ 0 ]: The requested view testview could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2014-12-05 10:22:47 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('testview')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('testview', Array)
#2 /var/www/application/views/basic.php(97): Kohana_View::factory('testview', Array)
#3 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#4 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#5 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#9 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/system/classes/Kohana/View.php:137
2014-12-05 10:28:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/basic.php [ 23 ] in /var/www/application/views/basic.php:23
2014-12-05 10:28:54 --- DEBUG: #0 /var/www/application/views/basic.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 23, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/views/basic.php:23
2014-12-05 10:41:59 --- EMERGENCY: View_Exception [ 0 ]: The requested view regview could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2014-12-05 10:41:59 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('regview')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('regview', Array)
#2 /var/www/application/classes/Controller/Main.php(58): Kohana_View::factory('regview', Array)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:137
2014-12-05 10:42:14 --- EMERGENCY: View_Exception [ 0 ]: The requested view regview could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2014-12-05 10:42:14 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('regview')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('regview', Array)
#2 /var/www/application/classes/Controller/Main.php(58): Kohana_View::factory('regview', Array)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:137
2014-12-05 10:42:16 --- EMERGENCY: View_Exception [ 0 ]: The requested view regview could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2014-12-05 10:42:16 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('regview')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('regview', Array)
#2 /var/www/application/classes/Controller/Main.php(58): Kohana_View::factory('regview', Array)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:137