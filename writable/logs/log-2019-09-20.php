<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-09-20 00:52:19 --> syntax error, unexpected '__construct' (T_STRING), expecting function (T_FUNCTION) or const (T_CONST)
#0 D:\xampp\htdocs\ci4\system\Router\Router.php(191): CodeIgniter\Router\Router->autoRoute('user')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(722): CodeIgniter\Router\Router->handle('user')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(295): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-09-20 00:52:29 --> syntax error, unexpected '__construct' (T_STRING), expecting function (T_FUNCTION) or const (T_CONST)
#0 D:\xampp\htdocs\ci4\system\Router\Router.php(191): CodeIgniter\Router\Router->autoRoute('user')
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(722): CodeIgniter\Router\Router->handle('user')
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(295): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-09-20 00:54:53 --> Cannot call constructor
#0 D:\xampp\htdocs\ci4\system\CodeIgniter.php(819): App\Controllers\User->__construct()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-09-20 01:32:02 --> Class 'App\Controllers\UserModel' not found
#0 D:\xampp\htdocs\ci4\system\CodeIgniter.php(819): App\Controllers\User->__construct()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-09-20 01:32:08 --> Class 'App\Controllers\UserModel' not found
#0 D:\xampp\htdocs\ci4\system\CodeIgniter.php(819): App\Controllers\User->__construct()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-09-20 01:32:59 --> Class 'App\Models\UserModel' not found
#0 D:\xampp\htdocs\ci4\system\CodeIgniter.php(819): App\Controllers\User->__construct()
#1 D:\xampp\htdocs\ci4\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#2 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
