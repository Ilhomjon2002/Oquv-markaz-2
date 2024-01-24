<?php
namespace app\controllers;
require_once __DIR__."/../config/renderView.php";
require_once __DIR__."/../config/autoload.php";
require_once __DIR__."/../config/helpers/csrfHelper.php";


class GroupController{
    public static function get_groups(){
        renderView("group/group",[
            $title_name="Yangi guruh qo'shish",
        ]);
    }

    public static function add_group(){

    }
}