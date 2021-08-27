<?php

use app\Controllers\AdminController;
use app\Controllers\ChartController;
use app\Controllers\LangController;
use app\Controllers\ProductController;
use app\Controllers\SiteController;

use app\Controllers\UserController;
use app\core\Application;
use app\core\Database;

require_once dirname(__DIR__) . '\vendor\autoload.php';
require_once dirname(__DIR__) . '\smarty\Smarty.class.php';

session_start();
/*
 * this is for multi language
 */
if(!isset($_SESSION['lang'])){
    $_SESSION['lang'] = "en";
}

//unset($_SESSION['flash_messages']['error']['value'][0]);
//exit;

$langFile = $_SESSION['lang'] . ".php";
include_once dirname(__DIR__) . "\language\\" . $langFile;

/*
 * the app variable is an instance from Application class
 */
$app = new Application(dirname(__DIR__));


/*
 * the db variable is an instance from Database class : connection to database
 */
$db = new Database();


$app->router->get('/lang/en', [LangController::class, 'changeLangToEn']);

$app->router->get('/lang/fr', [LangController::class, 'changeLangToFr']);


$app->router->get('/home', [SiteController::class,'homePage']);
$app->router->get('/', [SiteController::class,'homePage']);
$app->router->get('/about', [SiteController::class,'aboutPage']);
$app->router->get('/gallery', [SiteController::class,'galleriesPage']);
$app->router->get('/services', [SiteController::class,'servicesPage']);

$app->router->get('/contact', [SiteController::class,'contactPage']);
$app->router->post('/contact/send', [SiteController::class,'sendMessage']);

$app->router->get('/login', [UserController::class, 'loginPage']);
$app->router->post('/login', [UserController::class, 'signIn']);
$app->router->post('/signUp', [UserController::class, 'SignUp']);
$app->router->get('/logout', [UserController::class, 'logout']);

$app->router->get('/chart', [ChartController::class, 'chartPage']);
$app->router->post('/addToChart', [ChartController::class, 'addToChart']);

/* **********************************************
*                                               *
*  this side it's for all admin panel ROUTES    *
*                                               *
* ********************************************* */

$app->router->get('/admin/managers',[AdminController::class, 'ManagersPage']);
$app->router->post('/admin/managers/delete',[AdminController::class, 'deleteManager']);
$app->router->post('/admin/managers/add',[AdminController::class, 'addManager']);



$app->router->get('/admin/dashboard',[AdminController::class, 'dashboard']);
$app->router->get('/admin',[AdminController::class, 'dashboard']);

$app->router->get('/admin/services',[AdminController::class, 'servicesPage']);
$app->router->post('/admin/services/addService',[AdminController::class, 'addService']);
$app->router->post('/admin/services/edit',[AdminController::class, 'updateService']);


$app->router->get('/admin/employees',[AdminController::class, 'employeesPage']);
$app->router->post('/admin/employees/addEmployee',[AdminController::class, 'addEmployee']);
$app->router->post('/admin/employees/edit',[AdminController::class, 'updateEmployee']);


$app->router->get('/admin/commands',[AdminController::class, 'commandsPage']);
$app->router->post('/services/addCommand',[SiteController::class, 'addCommand']);
$app->router->post('/admin/commands/edit',[AdminController::class, 'updateCommand']);

$app->router->get('/admin/inbox',[AdminController::class, 'inboxPage']);
$app->router->get('/admin/readMessage',[AdminController::class, 'singleMsg']);
$app->router->post('/admin/readMessage',[AdminController::class, 'setRead']);
$app->router->post('/admin/messages/delete',[AdminController::class, 'deleteMessage']);


$app->router->get('/admin/profile',[AdminController::class,'profilePage']);
$app->router->get('/admin/deletePic',[UserController::class,'deletePicture']);



/* **********************************************
*                                               *
*  this side it's for all teachers ROUTES       *
*                                               *
* ********************************************* */

$app->router->post('/user/update',[UserController::class,'updateProfile']);
$app->router->get('/user/deletePic',[UserController::class,'deletePic']);



$app->run();