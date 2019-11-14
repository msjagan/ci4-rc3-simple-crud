<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-11-12 00:50:58 --> Undefined variable: username
#0 D:\xampp\htdocs\ci4\app\Controllers\User.php(74): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 74, Array)
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->update()
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-11-12 01:19:34 --> Argument 1 passed to CodeIgniter\Model::doProtectFields() must be of the type array, string given, called in D:\xampp\htdocs\ci4\system\Model.php on line 831
#0 D:\xampp\htdocs\ci4\system\Model.php(831): CodeIgniter\Model->doProtectFields('id=$id')
#1 D:\xampp\htdocs\ci4\app\Controllers\User.php(82): CodeIgniter\Model->update(Array, 'id=$id')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->update()
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#4 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-11-12 02:08:27 --> syntax error, unexpected ''/user);				' (T_ENCAPSED_AND_WHITESPACE)
#0 D:\xampp\htdocs\ci4\system\Router\Router.php(191): CodeIgniter\Router\Router->autoRoute('user')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(722): CodeIgniter\Router\Router->handle('user')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(295): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-11-12 04:39:34 --> syntax error, unexpected ''/user);				' (T_ENCAPSED_AND_WHITESPACE)
#0 D:\xampp\htdocs\ci4\system\Router\Router.php(191): CodeIgniter\Router\Router->autoRoute('user/new')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(722): CodeIgniter\Router\Router->handle('user/new')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(295): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
