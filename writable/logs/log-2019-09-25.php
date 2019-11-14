<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-09-25 00:24:30 --> Cannot call constructor
#0 D:\xampp\htdocs\ci4\system\CodeIgniter.php(819): App\Controllers\User->__construct()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-09-25 00:29:30 --> Class 'App\Controllers\UserModeal' not found
#0 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->index()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-09-25 00:32:05 --> Call to a member function allUsers() on null
#0 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->index()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-09-25 00:32:17 --> Call to a member function allUsers() on null
#0 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->index()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-09-25 00:34:45 --> Call to a member function allUsers() on null
#0 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->index()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-09-25 00:34:50 --> Call to a member function allUsers() on null
#0 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->index()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-09-25 00:42:36 --> Call to undefined method CodeIgniter\Database\MySQLi\Connection::findAll()
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(15): App\Models\UserModel->allUsers()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->index()
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-09-25 00:42:40 --> Call to undefined method CodeIgniter\Database\MySQLi\Connection::findall()
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(15): App\Models\UserModel->allUsers()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->index()
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-09-25 00:44:02 --> Call to undefined method CodeIgniter\Database\MySQLi\Connection::findall()
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(15): App\Models\UserModel->allUsers()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->index()
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-09-25 00:44:20 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::findall()
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(15): App\Models\UserModel->allUsers()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->index()
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-09-25 00:46:21 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::findAll()
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(15): App\Models\UserModel->allUsers()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->index()
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-09-25 00:46:33 --> Call to undefined method CodeIgniter\Database\MySQLi\Connection::findAll()
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(15): App\Models\UserModel->allUsers()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->index()
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-09-25 00:47:18 --> Call to undefined method CodeIgniter\Database\MySQLi\Connection::select()
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(15): App\Models\UserModel->allUsers()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->index()
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-09-25 00:47:28 --> syntax error, unexpected '*'
#0 D:\xampp\htdocs\ci4\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('D:\\xampp\\htdocs...')
#1 D:\xampp\htdocs\ci4\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Models\\User...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Models\\User...')
#3 D:\xampp\htdocs\ci4\app\Controllers\User.php(9): spl_autoload_call('App\\Models\\User...')
#4 D:\xampp\htdocs\ci4\system\CodeIgniter.php(819): App\Controllers\User->__construct()
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-09-25 01:14:32 --> Cannot use object of type stdClass as array
#0 D:\xampp\htdocs\ci4\system\View\View.php(235): include()
#1 D:\xampp\htdocs\ci4\system\Common.php(175): CodeIgniter\View\View->render('user/view', Array, NULL)
#2 D:\xampp\htdocs\ci4\app\Controllers\User.php(18): view('user/view', Array)
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->index()
#4 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-09-25 01:51:37 --> syntax error, unexpected 'if' (T_IF)
#0 D:\xampp\htdocs\ci4\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('D:\\xampp\\htdocs...')
#1 D:\xampp\htdocs\ci4\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Models\\User...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Models\\User...')
#3 D:\xampp\htdocs\ci4\app\Controllers\User.php(9): spl_autoload_call('App\\Models\\User...')
#4 D:\xampp\htdocs\ci4\system\CodeIgniter.php(819): App\Controllers\User->__construct()
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-09-25 01:51:44 --> syntax error, unexpected 'if' (T_IF)
#0 D:\xampp\htdocs\ci4\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('D:\\xampp\\htdocs...')
#1 D:\xampp\htdocs\ci4\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Models\\User...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Models\\User...')
#3 D:\xampp\htdocs\ci4\app\Controllers\User.php(9): spl_autoload_call('App\\Models\\User...')
#4 D:\xampp\htdocs\ci4\system\CodeIgniter.php(819): App\Controllers\User->__construct()
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-09-25 01:52:53 --> syntax error, unexpected 'if' (T_IF)
#0 D:\xampp\htdocs\ci4\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('D:\\xampp\\htdocs...')
#1 D:\xampp\htdocs\ci4\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Models\\User...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Models\\User...')
#3 D:\xampp\htdocs\ci4\app\Controllers\User.php(9): spl_autoload_call('App\\Models\\User...')
#4 D:\xampp\htdocs\ci4\system\CodeIgniter.php(819): App\Controllers\User->__construct()
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-09-25 01:55:17 --> Declaration of App\Models\UserModel::save($data) must be compatible with CodeIgniter\Model::save($data): bool
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-25 01:55:29 --> Declaration of App\Models\UserModel::save($data) must be compatible with CodeIgniter\Model::save($data): bool
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-25 01:56:26 --> Declaration of App\Models\UserModel::save($data) must be compatible with CodeIgniter\Model::save($data): bool
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-25 01:56:39 --> Declaration of App\Models\UserModel::save($data) must be compatible with CodeIgniter\Model::save($data): bool
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-25 01:57:06 --> Declaration of App\Models\UserModel::save($data) must be compatible with CodeIgniter\Model::save($data): bool
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-25 01:57:14 --> Declaration of App\Models\UserModel::save($data) must be compatible with CodeIgniter\Model::save($data): bool
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-25 01:57:29 --> Declaration of App\Models\UserModel::save($data) must be compatible with CodeIgniter\Model::save($data): bool
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-25 02:00:42 --> Declaration of App\Models\UserModel::save($data) must be compatible with CodeIgniter\Model::save($data): bool
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-25 02:00:50 --> Declaration of App\Models\UserModel::save($data) must be compatible with CodeIgniter\Model::save($data): bool
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-25 02:02:06 --> Declaration of App\Models\UserModel::save($data) must be compatible with CodeIgniter\Model::save($data): bool
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-25 02:03:26 --> Declaration of App\Models\UserModel::save($data) must be compatible with CodeIgniter\Model::save($data): bool
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-25 02:12:23 --> Declaration of App\Models\UserModel::save($data) must be compatible with CodeIgniter\Model::save($data): bool
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-25 02:12:25 --> Declaration of App\Models\UserModel::save($data) must be compatible with CodeIgniter\Model::save($data): bool
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-25 02:12:37 --> Declaration of App\Models\UserModel::save($data) must be compatible with CodeIgniter\Model::save($data): bool
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-25 02:12:39 --> Declaration of App\Models\UserModel::save($data) must be compatible with CodeIgniter\Model::save($data): bool
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-25 02:16:08 --> Declaration of App\Models\UserModel::save($data) must be compatible with CodeIgniter\Model::save($data): bool
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-25 02:16:09 --> Declaration of App\Models\UserModel::save($data) must be compatible with CodeIgniter\Model::save($data): bool
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-25 02:22:51 --> Declaration of App\Models\UserModel::save($data) must be compatible with CodeIgniter\Model::save($data): bool
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-25 02:22:53 --> Declaration of App\Models\UserModel::save($data) must be compatible with CodeIgniter\Model::save($data): bool
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-25 03:09:17 --> Duplicate entry '0' for key 'PRIMARY'
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('INSERT INTO `us...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `us...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `us...')
#3 D:\xampp\htdocs\ci4\system\Database\BaseBuilder.php(1888): CodeIgniter\Database\BaseConnection->query('INSERT INTO `us...', Array, false)
#4 D:\xampp\htdocs\ci4\app\Models\UserModel.php(31): CodeIgniter\Database\BaseBuilder->insert(Array)
#5 D:\xampp\htdocs\ci4\app\Controllers\User.php(37): App\Models\UserModel->savedata(Array)
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->save()
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#8 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-09-25 03:10:20 --> Duplicate entry '0' for key 'PRIMARY'
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('INSERT INTO `us...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `us...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `us...')
#3 D:\xampp\htdocs\ci4\system\Database\BaseBuilder.php(1888): CodeIgniter\Database\BaseConnection->query('INSERT INTO `us...', Array, false)
#4 D:\xampp\htdocs\ci4\app\Models\UserModel.php(31): CodeIgniter\Database\BaseBuilder->insert(Array)
#5 D:\xampp\htdocs\ci4\app\Controllers\User.php(37): App\Models\UserModel->savedata(Array)
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->save()
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#8 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-09-25 03:10:52 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::affectedRows()
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(37): App\Models\UserModel->savedata(Array)
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->save()
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-09-25 03:11:46 --> Duplicate entry '0' for key 'PRIMARY'
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('INSERT INTO `us...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `us...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `us...')
#3 D:\xampp\htdocs\ci4\system\Database\BaseBuilder.php(1888): CodeIgniter\Database\BaseConnection->query('INSERT INTO `us...', Array, false)
#4 D:\xampp\htdocs\ci4\app\Models\UserModel.php(31): CodeIgniter\Database\BaseBuilder->insert(Array)
#5 D:\xampp\htdocs\ci4\app\Controllers\User.php(37): App\Models\UserModel->savedata(Array)
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->save()
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#8 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
