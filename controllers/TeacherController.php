<?php

namespace app\controllers;
use app\models\Teacher;

require_once __DIR__."/../config/renderView.php";
require_once __DIR__."/../config/autoload.php";
require_once __DIR__."/../config/helpers/csrfHelper.php";
// require_once "../config/helpers/csrfHelper.php";

class TeacherController{
    public static function teachers(){
        // die("salom");
        $teacher=new Teacher();
        // die("salom");
        $teachers=$teacher->get_teachers();
        renderView("teacher/teacher",[
            "teachers"=>$teachers,
        ]);
    }
}

?>