<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-27 06:39:59 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2014-11-27 06:39:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 06:40:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Model/Register.php [ 13 ] in file:line
2014-11-27 06:40:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 06:41:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Model/Register.php [ 13 ] in file:line
2014-11-27 06:41:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 06:43:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Model/Register.php [ 13 ] in file:line
2014-11-27 06:43:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 06:45:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2014-11-27 06:45:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 06:46:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2014-11-27 06:46:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 06:46:36 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2014-11-27 06:46:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 06:48:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2014-11-27 06:48:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 06:49:08 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2014-11-27 06:49:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 06:51:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Model/Register.php [ 13 ] in file:line
2014-11-27 06:51:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 06:52:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Model/Register.php [ 13 ] in file:line
2014-11-27 06:52:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 06:52:58 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2014-11-27 06:52:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 06:54:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2014-11-27 06:54:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 06:54:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Model/Register.php [ 13 ] in file:line
2014-11-27 06:54:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 06:58:58 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2014-11-27 06:58:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 07:02:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2014-11-27 07:02:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 07:02:39 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-11-27 07:02:39 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/application/classes/Model/Register.php(16): Kohana_ORM->save()
#3 /var/www/application/classes/Controller/Main.php(49): Model_Register->reg('11231', '4444', '')
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-11-27 07:03:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2014-11-27 07:03:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 07:09:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2014-11-27 07:09:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 07:11:35 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2014-11-27 07:11:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 07:17:23 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-11-27 07:17:23 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/application/classes/Model/Register.php(16): Kohana_ORM->save()
#3 /var/www/application/classes/Controller/Main.php(49): Model_Register->reg('123123', 'asddasdas', '')
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-11-27 07:17:38 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-11-27 07:17:38 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/application/classes/Model/Register.php(16): Kohana_ORM->save()
#3 /var/www/application/classes/Controller/Main.php(49): Model_Register->reg('5546', '2531', '')
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-11-27 07:27:24 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'kohana.regcodes' doesn't exist [ SHOW FULL COLUMNS FROM `regcodes` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/MySQL.php:359
2014-11-27 07:27:24 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('regcodes')
#2 /var/www/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/application/classes/Model/Register.php(8): Kohana_ORM->__construct()
#6 /var/www/application/classes/Controller/Main.php(49): Model_Register->reg('bnm', 'adminmmm', '')
#7 /var/www/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/modules/database/classes/Kohana/Database/MySQL.php:359
2014-11-27 07:27:52 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-11-27 07:27:52 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/application/classes/Model/Register.php(16): Kohana_ORM->save()
#3 /var/www/application/classes/Controller/Main.php(49): Model_Register->reg('bnmbnm', 'bbb', '')
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-11-27 07:28:18 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-11-27 07:28:18 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/application/classes/Model/Register.php(16): Kohana_ORM->save()
#3 /var/www/application/classes/Controller/Main.php(49): Model_Register->reg('vvb', 'adminbbbv', '')
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-11-27 07:28:44 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-11-27 07:28:44 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/application/classes/Model/Register.php(16): Kohana_ORM->save()
#3 /var/www/application/classes/Controller/Main.php(49): Model_Register->reg('asaa', 'asdddd', '')
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-11-27 07:58:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE) ~ APPPATH/classes/Model/Register.php [ 16 ] in file:line
2014-11-27 07:58:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 07:59:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE) ~ APPPATH/classes/Model/Register.php [ 16 ] in file:line
2014-11-27 07:59:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 08:00:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE) ~ APPPATH/classes/Model/Register.php [ 16 ] in file:line
2014-11-27 08:00:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 08:00:33 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function hash_password() on a non-object ~ APPPATH/classes/Model/Register.php [ 15 ] in file:line
2014-11-27 08:00:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 08:00:55 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function hash_password() ~ APPPATH/classes/Model/Register.php [ 15 ] in file:line
2014-11-27 08:00:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 08:03:03 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function hash_password() on a non-object ~ APPPATH/classes/Model/Register.php [ 15 ] in file:line
2014-11-27 08:03:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 08:06:53 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function hash_password() on a non-object ~ APPPATH/classes/Model/Register.php [ 15 ] in file:line
2014-11-27 08:06:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 09:21:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/basic.php [ 151 ] in file:line
2014-11-27 09:21:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 09:21:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/basic.php [ 151 ] in file:line
2014-11-27 09:21:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 09:23:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/basic.php [ 151 ] in file:line
2014-11-27 09:23:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 09:24:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/basic.php [ 151 ] in file:line
2014-11-27 09:24:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 09:25:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/views/basic.php [ 92 ] in file:line
2014-11-27 09:25:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 09:25:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/basic.php [ 151 ] in file:line
2014-11-27 09:25:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 09:25:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/basic.php [ 151 ] in file:line
2014-11-27 09:25:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 09:25:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/basic.php [ 151 ] in file:line
2014-11-27 09:25:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 09:33:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/basic.php [ 90 ] in file:line
2014-11-27 09:33:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 09:42:39 --- EMERGENCY: ReflectionException [ 0 ]: Function min_length >= 4() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 396 ] in /var/www/system/classes/Kohana/Validation.php:396
2014-11-27 09:42:39 --- DEBUG: #0 /var/www/system/classes/Kohana/Validation.php(396): ReflectionFunction->__construct('min_length >= 4')
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#2 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#3 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#4 /var/www/application/classes/Model/Register.php(19): Kohana_ORM->save()
#5 /var/www/application/classes/Controller/Main.php(49): Model_Register->reg('12', '123123@ss', '12345', 1)
#6 /var/www/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#9 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/system/classes/Kohana/Validation.php:396
2014-11-27 10:02:11 --- EMERGENCY: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2014-11-27 10:02:11 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('', NULL)
#2 /var/www/application/classes/Controller/Main.php(59): Kohana_View::factory('')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:137
2014-11-27 10:06:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Main.php [ 56 ] in file:line
2014-11-27 10:06:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 10:13:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/regview.php [ 9 ] in file:line
2014-11-27 10:13:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 10:13:35 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/regview.php [ 9 ] in file:line
2014-11-27 10:13:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 10:13:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/regview.php [ 9 ] in file:line
2014-11-27 10:13:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line