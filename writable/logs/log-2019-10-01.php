<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-10-01 01:50:30 --> Call to a member function select() on null
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('8')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('8')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-01 01:56:05 --> Undefined variable: query
#0 D:\xampp\htdocs\ci4\app\Models\UserModel.php(41): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 41, Array)
#1 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('8')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('8')
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#4 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-10-01 01:56:11 --> Unknown column '$id' in 'where clause'
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT * FROM u...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM u...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM u...')
#3 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Database\BaseConnection->query('SELECT * FROM u...')
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('8')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('8')
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-10-01 01:56:56 --> Unknown column '$id' in 'where clause'
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT * FROM u...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM u...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM u...')
#3 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Database\BaseConnection->query('SELECT * FROM u...')
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('8')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('8')
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-10-01 02:04:07 --> Call to a member function findall() on null
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(63): App\Models\UserModel->getUsers()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->getUsers()
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-01 02:04:47 --> Call to a member function findall() on null
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(63): App\Models\UserModel->getUsers()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->getUsers()
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-01 02:05:18 --> Call to a member function findall() on null
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(63): App\Models\UserModel->getUsers()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->getUsers()
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-01 02:20:47 --> Unknown column '$id' in 'where clause'
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT * FROM u...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM u...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM u...')
#3 D:\xampp\htdocs\ci4\app\Models\UserModel.php(39): CodeIgniter\Database\BaseConnection->query('SELECT * FROM u...')
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(54): App\Models\UserModel->getUser('8')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('8')
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-10-01 02:22:29 --> Undefined variable: primaryKey
#0 D:\xampp\htdocs\ci4\app\Models\UserModel.php(45): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 45, Array)
#1 D:\xampp\htdocs\ci4\app\Controllers\User.php(63): App\Models\UserModel->getUsers()
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->getUsers()
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#4 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-10-01 02:23:05 --> Table 'ci4.userss' doesn't exist
#0 D:\xampp\htdocs\ci4\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT *\nFROM `...')
#1 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(709): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 D:\xampp\htdocs\ci4\system\Database\BaseConnection.php(637): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 D:\xampp\htdocs\ci4\system\Database\BaseBuilder.php(1510): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 D:\xampp\htdocs\ci4\system\Model.php(1658): CodeIgniter\Database\BaseBuilder->get()
#5 D:\xampp\htdocs\ci4\app\Models\UserModel.php(46): CodeIgniter\Model->__call('get', Array)
#6 D:\xampp\htdocs\ci4\app\Controllers\User.php(63): App\Models\UserModel->getUsers()
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->getUsers()
#8 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#9 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2019-10-01 02:24:12 --> Too few arguments to function App\Models\UserModel::getUser(), 0 passed in D:\xampp\htdocs\ci4\app\Controllers\User.php on line 63 and exactly 1 expected
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(63): App\Models\UserModel->getUser()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->getUser()
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-01 02:25:21 --> Too few arguments to function App\Models\UserModel::getUser(), 0 passed in D:\xampp\htdocs\ci4\app\Controllers\User.php on line 63 and exactly 1 expected
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(63): App\Models\UserModel->getUser()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->getUser()
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-01 02:26:27 --> Call to a member function getResult() on array
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(19): App\Models\UserModel->allUsers()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->index()
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-01 03:26:27 --> Call to a member function get() on array
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(19): App\Models\UserModel->allUsers()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->index()
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-01 03:26:39 --> Call to a member function getResultArray() on array
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(19): App\Models\UserModel->allUsers()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->index()
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-01 03:28:35 --> Trying to get property 'id' of non-object
#0 D:\xampp\htdocs\ci4\app\Views\user\view.php(37): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 37, Array)
#1 D:\xampp\htdocs\ci4\system\View\View.php(235): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\ci4\system\Common.php(175): CodeIgniter\View\View->render('user/view', Array, NULL)
#3 D:\xampp\htdocs\ci4\app\Controllers\User.php(22): view('user/view', Array)
#4 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->index()
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-10-01 03:29:16 --> Trying to get property 'id' of non-object
#0 D:\xampp\htdocs\ci4\app\Views\user\view.php(43): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 43, Array)
#1 D:\xampp\htdocs\ci4\system\View\View.php(235): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\ci4\system\Common.php(175): CodeIgniter\View\View->render('user/view', Array, NULL)
#3 D:\xampp\htdocs\ci4\app\Controllers\User.php(22): view('user/view', Array)
#4 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->index()
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-10-01 03:48:07 --> Trying to get property 'username' of non-object
#0 D:\xampp\htdocs\ci4\app\Views\user\edit.php(39): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 39, Array)
#1 D:\xampp\htdocs\ci4\system\View\View.php(235): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\ci4\system\Common.php(175): CodeIgniter\View\View->render('user/edit', Array, NULL)
#3 D:\xampp\htdocs\ci4\app\Controllers\User.php(57): view('user/edit', Array)
#4 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('15')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-10-01 03:54:02 --> syntax error, unexpected '(', expecting ',' or ';'
#0 D:\xampp\htdocs\ci4\system\Router\Router.php(191): CodeIgniter\Router\Router->autoRoute('user/edit/10002')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(722): CodeIgniter\Router\Router->handle('user/edit/10002')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(295): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-01 03:58:06 --> Call to undefined function failnotfound()
#0 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('10002')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-01 03:58:11 --> Call to undefined function failnotfound()
#0 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('10002')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-01 03:58:16 --> Call to undefined function failnotfound()
#0 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('10002')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-01 04:02:25 --> syntax error, unexpected end of file
#0 D:\xampp\htdocs\ci4\system\Common.php(175): CodeIgniter\View\View->render('user/edit', Array, NULL)
#1 D:\xampp\htdocs\ci4\app\Controllers\User.php(57): view('user/edit', Array)
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('10002')
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#4 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-10-01 04:08:13 --> Call to undefined method CodeIgniter\Session\Session::userdata()
#0 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit('55')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-01 04:08:32 --> Too few arguments to function App\Controllers\User::edit(), 0 passed in D:\xampp\htdocs\ci4\system\CodeIgniter.php on line 844 and exactly 1 expected
#0 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->edit()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
