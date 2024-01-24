<?php
namespace app\controllers;

use app\models\Dashboard;

require_once __DIR__."/../config/renderView.php";
require_once __DIR__."/../config/autoload.php";
require_once __DIR__."/../config/helpers/csrfHelper.php";
class DashboardController{
    
    public static function index(){
        $dashboard=new Dashboard();
        $students=$dashboard->get_students_count();
        // var_dump($students);
        // die;
        renderView("dashboard/dashboard",[
            'students'=>$students['student_count'],
        ]);
    }

}
?>