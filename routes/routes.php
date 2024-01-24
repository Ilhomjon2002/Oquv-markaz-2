<?php

// require_once __DIR__.'/../vendor/autoload.php';
namespace app\routes; 
use app\controllers\AccauntController;
use app\controllers\CalendarController;
use app\controllers\DashboardController;
use app\controllers\GroupController;
use app\controllers\StudentController;
use app\controllers\TeacherController;
use app\router\Request;
use app\router\Router;


$router=new Router(new Request);


// Login page
$router->get("/",   [AccauntController::class,'login']);
$router->post('/',  [AccauntController::class,'login']);


// Logout page
$router->get("/logout", [AccauntController::class, "logout"]);


// Registration page
$router->get("/register",   [AccauntController::class,'register']);
$router->post('/register',  [AccauntController::class,'register']);


// Dashboard page
$router->get("/dashboard1", [DashboardController::class, 'index']);


// Users page
$router->get("/students", [StudentController::class, 'users']);


// Teachers page
$router->get("/teachers", [TeacherController::class, 'teachers']);


// Calendar page
$router->get("/calendar",[CalendarController::class,'calendar']);


// Group page
$router->get("/groups",[GroupController::class,'get_groups']);