<?php
namespace app\controllers;
require_once __DIR__."/../config/renderView.php";
require_once __DIR__."/../config/autoload.php";
require_once __DIR__."/../config/helpers/csrfHelper.php";


class CalendarController{
    public static function calendar(){
        // session_start();
        renderView("student_calendar/calendar");
    }
}

?>