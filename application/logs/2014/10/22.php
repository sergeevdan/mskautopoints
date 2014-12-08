<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-22 05:53:51 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /var/www/system/classes/Kohana/Cookie.php:67
2014-10-22 05:53:51 --- DEBUG: #0 /var/www/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('session')
#2 /var/www/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/system/classes/Kohana/Cookie.php:67
2014-10-22 06:04:40 --- EMERGENCY: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2014-10-22 06:04:40 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('basic')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('basic', NULL)
#2 /var/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('basic')
#3 /var/www/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:137
2014-10-22 06:05:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/Controller/Main.php [ 14 ] in file:line
2014-10-22 06:05:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-22 06:06:08 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in /var/www/modules/auth/classes/Kohana/Auth.php:143
2014-10-22 06:06:08 --- DEBUG: #0 /var/www/modules/auth/classes/Kohana/Auth.php(143): Kohana_Auth->hash('4155246')
#1 /var/www/application/classes/Controller/Main.php(41): Kohana_Auth->hash_password('4155246')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Main->action_hpass()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/modules/auth/classes/Kohana/Auth.php:143
2014-10-22 08:24:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Controller/Auth.php [ 38 ] in /var/www/application/classes/Controller/Auth.php:38
2014-10-22 08:24:50 --- DEBUG: #0 /var/www/application/classes/Controller/Auth.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 38, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Auth.php:38
2014-10-22 08:25:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Controller/Auth.php [ 39 ] in /var/www/application/classes/Controller/Auth.php:39
2014-10-22 08:25:59 --- DEBUG: #0 /var/www/application/classes/Controller/Auth.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 39, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Auth.php:39
2014-10-22 08:26:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Controller/Auth.php [ 39 ] in /var/www/application/classes/Controller/Auth.php:39
2014-10-22 08:26:06 --- DEBUG: #0 /var/www/application/classes/Controller/Auth.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 39, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Auth.php:39
2014-10-22 08:32:12 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 15 ] in file:line
2014-10-22 08:32:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-22 08:35:57 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method HTTP::initial() ~ APPPATH/classes/Controller/Auth.php [ 15 ] in file:line
2014-10-22 08:35:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-22 08:37:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 15 ] in file:line
2014-10-22 08:37:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-22 08:49:48 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function logged_in() on a non-object ~ APPPATH/views/home.php [ 2 ] in file:line
2014-10-22 08:49:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-22 09:25:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ']' ~ APPPATH/classes/Controller/Auth.php [ 27 ] in file:line
2014-10-22 09:25:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-22 09:25:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ']' ~ APPPATH/classes/Controller/Auth.php [ 27 ] in file:line
2014-10-22 09:25:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line