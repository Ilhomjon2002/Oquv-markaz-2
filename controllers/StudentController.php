<?php

namespace app\controllers;
use app\models\Student;


require_once __DIR__."/../config/renderView.php";
require_once __DIR__."/../config/autoload.php";
require_once __DIR__."/../config/helpers/csrfHelper.php";



class StudentController
{
    // USERLAR RO'YXATINI QAYTARADI
    public static function users()
    {
        $dashboard = new Student();
        $users = $dashboard->get_users();
        // var_dump($users);
        // die;
        renderView("users/users", [
            'users' => $users,
        ]);
    }
}
