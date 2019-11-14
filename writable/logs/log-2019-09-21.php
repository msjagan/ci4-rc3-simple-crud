<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-09-21 00:26:33 --> CodeIgniter\View\View::main(): Failed opening required '../layout/footer.php' (include_path='D:\xampp\php\PEAR')
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-21 00:27:28 --> CodeIgniter\View\View::main(): Failed opening required 'layout/footer.php' (include_path='D:\xampp\php\PEAR')
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-21 00:27:33 --> CodeIgniter\View\View::main(): Failed opening required 'layout/footer.php' (include_path='D:\xampp\php\PEAR')
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-21 00:28:19 --> CodeIgniter\View\View::main(): Failed opening required '../layout/footer.php' (include_path='D:\xampp\php\PEAR')
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-21 00:28:25 --> CodeIgniter\View\View::main(): Failed opening required '/layout/footer.php' (include_path='D:\xampp\php\PEAR')
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-21 00:28:37 --> CodeIgniter\View\View::main(): Failed opening required '../layout/footer.php' (include_path='D:\xampp\php\PEAR')
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-21 00:28:42 --> include(../layout/footer.php): failed to open stream: No such file or directory
#0 D:\xampp\htdocs\ci4\app\Views\user\new.php(467): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(../layo...', 'D:\\xampp\\htdocs...', 467, Array)
#1 D:\xampp\htdocs\ci4\app\Views\user\new.php(467): include()
#2 D:\xampp\htdocs\ci4\system\View\View.php(235): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\ci4\system\Common.php(175): CodeIgniter\View\View->render('user/new', Array, NULL)
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(16): view('user/new')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->index()
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-21 00:28:55 --> include(../layout/footer.php): failed to open stream: No such file or directory
#0 D:\xampp\htdocs\ci4\app\Views\user\new.php(466): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(../layo...', 'D:\\xampp\\htdocs...', 466, Array)
#1 D:\xampp\htdocs\ci4\app\Views\user\new.php(466): include()
#2 D:\xampp\htdocs\ci4\system\View\View.php(235): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\ci4\system\Common.php(175): CodeIgniter\View\View->render('user/new', Array, NULL)
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(16): view('user/new')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->index()
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-21 00:29:03 --> include(../layout/footer.php): failed to open stream: No such file or directory
#0 D:\xampp\htdocs\ci4\app\Views\user\new.php(466): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(../layo...', 'D:\\xampp\\htdocs...', 466, Array)
#1 D:\xampp\htdocs\ci4\app\Views\user\new.php(466): include()
#2 D:\xampp\htdocs\ci4\system\View\View.php(235): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\ci4\system\Common.php(175): CodeIgniter\View\View->render('user/new', Array, NULL)
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(16): view('user/new')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->index()
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-21 00:29:22 --> include(../layout/footer.php): failed to open stream: No such file or directory
#0 D:\xampp\htdocs\ci4\app\Views\user\new.php(466): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(../layo...', 'D:\\xampp\\htdocs...', 466, Array)
#1 D:\xampp\htdocs\ci4\app\Views\user\new.php(466): include()
#2 D:\xampp\htdocs\ci4\system\View\View.php(235): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\ci4\system\Common.php(175): CodeIgniter\View\View->render('user/new', Array, NULL)
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(23): view('user/new')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->new()
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-21 00:29:55 --> include(layout/footer): failed to open stream: No such file or directory
#0 D:\xampp\htdocs\ci4\app\Views\user\new.php(466): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(layout/...', 'D:\\xampp\\htdocs...', 466, Array)
#1 D:\xampp\htdocs\ci4\app\Views\user\new.php(466): include()
#2 D:\xampp\htdocs\ci4\system\View\View.php(235): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\ci4\system\Common.php(175): CodeIgniter\View\View->render('user/new', Array, NULL)
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(23): view('user/new')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->new()
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-21 00:29:58 --> include(layout/footer.php): failed to open stream: No such file or directory
#0 D:\xampp\htdocs\ci4\app\Views\user\new.php(466): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(layout/...', 'D:\\xampp\\htdocs...', 466, Array)
#1 D:\xampp\htdocs\ci4\app\Views\user\new.php(466): include()
#2 D:\xampp\htdocs\ci4\system\View\View.php(235): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\ci4\system\Common.php(175): CodeIgniter\View\View->render('user/new', Array, NULL)
#4 D:\xampp\htdocs\ci4\app\Controllers\User.php(23): view('user/new')
#5 D:\xampp\htdocs\ci4\system\CodeIgniter.php(844): App\Controllers\User->new()
#6 D:\xampp\htdocs\ci4\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\User))
#7 D:\xampp\htdocs\ci4\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 D:\xampp\htdocs\ci4\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-09-21 00:30:07 --> CodeIgniter\View\View::main(): Failed opening required 'layout/footer.php' (include_path='D:\xampp\php\PEAR')
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-21 00:30:44 --> CodeIgniter\View\View::main(): Failed opening required 'layout/footer.php' (include_path='D:\xampp\php\PEAR')
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-21 00:31:21 --> CodeIgniter\View\View::main(): Failed opening required '../../layout/footer.php' (include_path='D:\xampp\php\PEAR')
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-21 00:31:28 --> CodeIgniter\View\View::main(): Failed opening required 'welcome_message.php' (include_path='D:\xampp\php\PEAR')
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-21 00:31:59 --> CodeIgniter\View\View::main(): Failed opening required 'welcome_message.php' (include_path='D:\xampp\php\PEAR')
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-21 00:34:07 --> CodeIgniter\View\View::main(): Failed opening required 'D:\xampp\htdocs\ci4\app\view/welcome_message.php' (include_path='D:\xampp\php\PEAR')
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-21 00:34:22 --> CodeIgniter\View\View::main(): Failed opening required 'D:\xampp\htdocs\ci4\app\../view/welcome_message.php' (include_path='D:\xampp\php\PEAR')
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-21 00:37:28 --> CodeIgniter\View\View::main(): Failed opening required 'D:\xampp\htdocs\ci4\app\../views/welcome_message.php' (include_path='D:\xampp\php\PEAR')
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
