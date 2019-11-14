<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-09-30 05:24:54 --> Call to undefined function baseurl()
#0 D:\xampp\htdocs\ci4\system\View\View.php(235): include()
#1 D:\xampp\htdocs\ci4\system\Common.php(175): CodeIgniter\View\View->render('user/view', Array, NULL)
#2 D:\xampp\htdocs\ci4\app\Controllers\User.php(22): view('user/view', Array)
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->index()
#4 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-09-30 05:30:26 --> syntax error, unexpected ';', expecting ')'
#0 D:\xampp\htdocs\ci4\system\CodeIgniter.php(295): CodeIgniter\CodeIgniter->tryToRouteIt(NULL)
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#2 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#3 {main}
CRITICAL - 2019-09-30 05:38:11 --> Invalid file: {0}
#0 D:\xampp\htdocs\ci4\system\View\View.php(223): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('edit.php')
#1 D:\xampp\htdocs\ci4\system\Common.php(175): CodeIgniter\View\View->render('edit', Array, NULL)
#2 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): view('edit')
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('17')
#4 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-09-30 06:21:56 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::find()
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('asdfd')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('asdfd')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-09-30 06:22:10 --> Call to undefined method CodeIgniter\Database\MySQLi\Connection::find()
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('asdfd')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('asdfd')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-09-30 06:22:13 --> Call to undefined method CodeIgniter\Database\MySQLi\Connection::find()
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('id')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('id')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-09-30 06:22:26 --> Undefined variable: userModel
#0 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 39, Array)
#1 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('id')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('id')
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#4 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-09-30 06:23:01 --> Call to undefined method CodeIgniter\Database\MySQLi\Connection::select()
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('id')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('id')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-09-30 06:23:24 --> Call to undefined method CodeIgniter\Database\MySQLi\Connection::select()
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('id')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('id')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-09-30 06:25:38 --> Call to a member function get() on null
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('id')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('id')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-09-30 06:26:18 --> Undefined variable: builder
#0 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 39, Array)
#1 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('id')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('id')
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#4 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-09-30 06:26:50 --> Call to a member function get() on null
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-09-30 06:28:13 --> Call to a member function get() on null
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-09-30 06:30:02 --> Undefined variable: builder
#0 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 39, Array)
#1 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#4 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-09-30 06:30:09 --> Call to a member function where() on null
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-09-30 06:31:26 --> Call to a member function select() on null
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-09-30 06:32:48 --> Unknown column '$id' in 'where clause'
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT * FROM u...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM u...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM u...')
#3 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Database\BaseConnection->query('SELECT * FROM u...')
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-30 06:34:19 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '} LIMIT 1' at line 1
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT * FROM u...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM u...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM u...')
#3 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Database\BaseConnection->query('SELECT * FROM u...')
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-30 06:34:33 --> Unknown column '$id' in 'where clause'
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT * FROM u...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM u...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM u...')
#3 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Database\BaseConnection->query('SELECT * FROM u...')
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-30 06:38:22 --> Unknown column '$id' in 'where clause'
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT * FROM u...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM u...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM u...')
#3 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Database\BaseConnection->query('SELECT * FROM u...')
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-30 06:39:20 --> Call to undefined method CodeIgniter\Database\MySQLi\Result::where()
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-09-30 06:40:46 --> Unknown column '$primaryKey' in 'where clause'
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT * FROM u...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM u...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM u...')
#3 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Database\BaseConnection->query('SELECT * FROM u...')
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-30 06:41:09 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '->table WHERE $primaryKey = $id LIMIT 1' at line 1
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT * FROM $...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM $...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM $...')
#3 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Database\BaseConnection->query('SELECT * FROM $...')
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-30 06:41:26 --> Table 'ci4.$this->table' doesn't exist
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT * FROM `...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM `...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM `...')
#3 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Database\BaseConnection->query('SELECT * FROM `...')
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-30 06:41:47 --> Unknown column '$primaryKey' in 'where clause'
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT * FROM u...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM u...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM u...')
#3 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Database\BaseConnection->query('SELECT * FROM u...')
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-30 06:41:52 --> Unknown column 'asdf' in 'where clause'
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT * FROM u...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM u...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM u...')
#3 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Database\BaseConnection->query('SELECT * FROM u...')
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-30 06:41:56 --> Unknown column '$id' in 'where clause'
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT * FROM u...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM u...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM u...')
#3 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Database\BaseConnection->query('SELECT * FROM u...')
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-30 06:42:05 --> Unknown column '$id' in 'where clause'
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT * FROM u...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM u...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM u...')
#3 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Database\BaseConnection->query('SELECT * FROM u...')
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-30 06:42:08 --> Unknown column '$id' in 'where clause'
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT * FROM u...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM u...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM u...')
#3 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Database\BaseConnection->query('SELECT * FROM u...')
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-30 06:42:24 --> Unknown column '$id' in 'where clause'
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT * FROM u...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM u...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM u...')
#3 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Database\BaseConnection->query('SELECT * FROM u...')
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-30 06:42:27 --> Unknown column '$id' in 'where clause'
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT * FROM u...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM u...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM u...')
#3 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Database\BaseConnection->query('SELECT * FROM u...')
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-30 06:43:03 --> syntax error, unexpected '$id' (T_VARIABLE), expecting ')'
#0 D:\xampp\htdocs\ci4\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('D:\\xampp\\htdocs...')
#1 D:\xampp\htdocs\ci4\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Models\\User...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Models\\User...')
#3 D:\xampp\htdocs\ci4\app\Controllers\User.php(11): spl_autoload_call('App\\Models\\User...')
#4 D:\xampp\htdocs\ci4\system\CodeIgniter.php(819): App\Controllers\User->__construct()
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-09-30 06:44:55 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '} LIMIT 1' at line 1
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT * FROM u...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM u...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM u...')
#3 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Database\BaseConnection->query('SELECT * FROM u...')
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-30 06:45:00 --> Unknown column '$id' in 'where clause'
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT * FROM u...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM u...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM u...')
#3 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Database\BaseConnection->query('SELECT * FROM u...')
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-30 06:45:17 --> Unknown column '$id' in 'where clause'
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT * FROM u...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM u...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM u...')
#3 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Database\BaseConnection->query('SELECT * FROM u...')
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-30 06:45:21 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '= $id} LIMIT 1' at line 1
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT * FROM u...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM u...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM u...')
#3 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Database\BaseConnection->query('SELECT * FROM u...')
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-30 06:45:28 --> Unknown column '$id' in 'where clause'
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT * FROM u...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM u...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM u...')
#3 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Database\BaseConnection->query('SELECT * FROM u...')
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-30 06:45:41 --> Unknown column '$id' in 'where clause'
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT * FROM u...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM u...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM u...')
#3 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Database\BaseConnection->query('SELECT * FROM u...')
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-30 06:45:47 --> Unknown column '$id' in 'where clause'
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT * FROM u...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM u...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM u...')
#3 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Database\BaseConnection->query('SELECT * FROM u...')
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-30 06:48:53 --> Call to a member function select() on null
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-09-30 06:49:06 --> Call to a member function select() on null
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-09-30 06:49:23 --> Call to a member function select() on null
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-09-30 07:16:11 --> Call to a member function select() on null
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-09-30 07:16:15 --> Call to a member function select() on null
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('34')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('34')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
