<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-02 09:24:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Myser' not found ~ APPPATH/classes/Model/Register.php [ 9 ] in file:line
2014-12-02 09:24:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-02 09:27:29 --- EMERGENCY: ReflectionException [ 0 ]: Class Controller_Main does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 94 ] in /var/www/system/classes/Kohana/Request/Client/Internal.php:94
2014-12-02 09:27:29 --- DEBUG: #0 /var/www/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#1 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 /var/www/index.php(118): Kohana_Request->execute()
#4 {main} in /var/www/system/classes/Kohana/Request/Client/Internal.php:94
2014-12-02 09:32:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Controller/Auth.php [ 64 ] in /var/www/application/classes/Controller/Auth.php:64
2014-12-02 09:32:32 --- DEBUG: #0 /var/www/application/classes/Controller/Auth.php(64): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 64, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Auth->action_reg()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Auth.php:64
2014-12-02 09:57:03 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method ORM_Validation_Exception::errorss() ~ APPPATH/classes/Model/Register.php [ 34 ] in file:line
2014-12-02 09:57:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-02 10:08:52 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_Myuser' does not have a method 'username_available' ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2014-12-02 10:08:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#3 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#4 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#5 /var/www/application/classes/Model/Register.php(19): Kohana_ORM->save()
#6 /var/www/application/classes/Controller/Main.php(48): Model_Register->reg('admin', 'ss', 'a', 1)
#7 /var/www/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-12-02 10:09:22 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_Myuser' does not have a method 'username_available' ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2014-12-02 10:09:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#3 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#4 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#5 /var/www/application/classes/Model/Register.php(19): Kohana_ORM->save()
#6 /var/www/application/classes/Controller/Main.php(48): Model_Register->reg('admin', '', '', 1)
#7 /var/www/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-12-02 10:09:56 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_Myuser' does not have a method 'username_available' ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2014-12-02 10:09:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#3 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#4 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#5 /var/www/application/classes/Model/Register.php(19): Kohana_ORM->save()
#6 /var/www/application/classes/Controller/Main.php(48): Model_Register->reg('admin1', '', '', 1)
#7 /var/www/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-12-02 10:10:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-12-02 10:10:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-02 10:11:17 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'admin2' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('admin2', 's-d-2@yandex.ru', '4155246') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2014-12-02 10:11:17 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /var/www/application/classes/Model/Register.php(19): Kohana_ORM->save()
#4 /var/www/application/classes/Controller/Main.php(48): Model_Register->reg('admin2', 's-d-2@yandex.ru', '4155246', 1)
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2014-12-02 10:12:03 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 's-d-2@yandex.ru' for key 'uniq_email' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('qwert', 's-d-2@yandex.ru', '4155246') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2014-12-02 10:12:03 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /var/www/application/classes/Model/Register.php(19): Kohana_ORM->save()
#4 /var/www/application/classes/Controller/Main.php(48): Model_Register->reg('qwert', 's-d-2@yandex.ru', '4155246', 1)
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2014-12-02 10:16:54 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'admin' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('admin', 's-d-5@yandex.ru', '4155246') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2014-12-02 10:16:54 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /var/www/application/classes/Model/Register.php(19): Kohana_ORM->save()
#4 /var/www/application/classes/Controller/Main.php(48): Model_Register->reg('admin', 's-d-5@yandex.ru', '4155246', 1)
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2014-12-02 10:28:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: email ~ APPPATH/classes/Model/Myuser.php [ 45 ] in /var/www/application/classes/Model/Myuser.php:45
2014-12-02 10:28:19 --- DEBUG: #0 /var/www/application/classes/Model/Myuser.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 45, Array)
#1 [internal function]: Model_Myuser->email_unique('s-d-1@yandex.ru')
#2 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#3 /var/www/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#4 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#5 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#6 /var/www/application/classes/Model/Register.php(19): Kohana_ORM->save()
#7 /var/www/application/classes/Controller/Main.php(48): Model_Register->reg('admin', 's-d-1@yandex.ru', '4155246', 1)
#8 /var/www/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/application/classes/Model/Myuser.php:45
2014-12-02 10:29:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: email ~ APPPATH/classes/Model/Myuser.php [ 45 ] in /var/www/application/classes/Model/Myuser.php:45
2014-12-02 10:29:15 --- DEBUG: #0 /var/www/application/classes/Model/Myuser.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 45, Array)
#1 [internal function]: Model_Myuser->email_unique('s-d-1@yandex.ru')
#2 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#3 /var/www/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#4 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#5 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#6 /var/www/application/classes/Model/Register.php(19): Kohana_ORM->save()
#7 /var/www/application/classes/Controller/Main.php(48): Model_Register->reg('admin', 's-d-1@yandex.ru', '4155246', 1)
#8 /var/www/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/application/classes/Model/Myuser.php:45
2014-12-02 10:31:32 --- EMERGENCY: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2014-12-02 10:31:32 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('main')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('main', Array)
#2 /var/www/application/classes/Controller/Main.php(15): Kohana_View::factory('main', Array)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:137
2014-12-02 10:40:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: success ~ APPPATH/views/basic.php [ 90 ] in /var/www/application/views/basic.php:90
2014-12-02 10:40:29 --- DEBUG: #0 /var/www/application/views/basic.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 90, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/views/basic.php:90
2014-12-02 10:44:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Main' not found ~ APPPATH/views/basic.php [ 90 ] in file:line
2014-12-02 10:44:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-02 10:44:32 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/application/views/basic.php on line 90 and defined ~ SYSPATH/classes/Kohana/Controller.php [ 43 ] in /var/www/system/classes/Kohana/Controller.php:43
2014-12-02 10:44:32 --- DEBUG: #0 /var/www/system/classes/Kohana/Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/system...', 43, Array)
#1 /var/www/application/views/basic.php(90): Kohana_Controller->__construct()
#2 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#3 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#4 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/system/classes/Kohana/Controller.php:43
2014-12-02 10:44:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'Main' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH/views/basic.php [ 90 ] in file:line
2014-12-02 10:44:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-02 10:45:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'main' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH/views/basic.php [ 90 ] in file:line
2014-12-02 10:45:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-02 10:46:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: register ~ APPPATH/views/basic.php [ 90 ] in /var/www/application/views/basic.php:90
2014-12-02 10:46:28 --- DEBUG: #0 /var/www/application/views/basic.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 90, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/views/basic.php:90
2014-12-02 10:46:57 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function Model_Register() ~ APPPATH/views/basic.php [ 91 ] in file:line
2014-12-02 10:46:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-02 10:47:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_Register::$errorss ~ APPPATH/views/basic.php [ 92 ] in /var/www/application/views/basic.php:92
2014-12-02 10:47:05 --- DEBUG: #0 /var/www/application/views/basic.php(92): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/applic...', 92, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/views/basic.php:92
2014-12-02 10:48:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function Model_Register() ~ APPPATH/views/basic.php [ 95 ] in file:line
2014-12-02 10:48:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-02 10:49:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/basic.php [ 97 ] in file:line
2014-12-02 10:49:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line