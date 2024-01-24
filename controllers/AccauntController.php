<?php

namespace app\controllers;

use app\models\Accaunt;

// var_dump(__DIR__);
require_once __DIR__."/../config/renderView.php";
require_once __DIR__."/../config/autoload.php";
require_once __DIR__."/../config/helpers/csrfHelper.php";

class AccauntController
{
    public static function login()
    {
        // session_start();
        if (!empty($_SESSION)) {
            // $_SESSION = array();
            // // Destroy the session
            // session_destroy();
            header('Location: /dashboard');
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $studentData = [
                "last_name" => $_REQUEST['name'] ?? '',
                "password" => $_REQUEST['password'] ?? '',
            ];

            $student = new Accaunt();
            $errors = $student->login($studentData);
        }
        renderView("register/login", [
            'errors' => $errors ?? [],
        ]);
    }

    public static function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data['first_name'] = $_REQUEST["first_name"] ?? '';
            $data['last_name'] = $_REQUEST["last_name"] ?? "";
            $data['password'] = $_REQUEST["password"] ?? '';
            $data['password_repeat'] = $_REQUEST['password_repeat'] ?? '';
            $data['phone_number'] = $_REQUEST['phone_number'] ?? '';
            $data['status'] = $_REQUEST['status'] ?? '';
            $data['user_role'] = $_REQUEST['user_role'] ?? '';
            $data['token'] = csrfa_token();
            $data['gender'] = $_REQUEST['gender'] ?? '';

            // echo "<pre>";
            // var_dump($data);
            // echo "</pre>";

            // die;

            $accaunt = new Accaunt();
            $accaunt->register($data);
        }


        renderView('register/register');
    }

    public static function logout()
    {
        renderView("register/logout");
    }
}
