<?php

namespace app\models;

use app\database\Database;
// require_once "../config/config.php";
class Accaunt
{
    private ?int $id = null;
    private string $first_name;
    private string $last_name;
    private int $user_role;
    private string $password;
    private string $status;
    private string $updated_at;
    private string $phone_number;
    private string $token;
    private string $gender;

    private $DB;

    public function __construct()
    {
        $this->DB = new Database($host = "localhost", $username = "root", $password = "", $database = "oquv_markaz");
    }

    public function register($data)
    {

        $this->first_name = $data['first_name'];
        $this->last_name = $data['last_name'];
        $this->user_role = $data['user_role'];
        $this->password = $data['password'];
        $this->status = $data['status'];
        $this->phone_number = $data['phone_number'];
        $this->token = $data['token'];
        $this->gender = $data['gender'];

        // $this->updated_at=$updated_at;
        $newStudentData = [
            "first_name" => $this->first_name,
            "last_name" => $this->last_name,
            "user_role" => $this->user_role,
            "password" => $this->password,
            "status" => $this->status,
            "phone_number" => $this->phone_number,
            'token' => $this->token,
            'gender' => $this->gender
        ];
        $errors = [];
        if (!$this->password) {
            $errors[] = 'Password is required';
        }
        if (!$this->last_name) {
            $errors[] = 'Last Name is required';
        }
        if (!$this->first_name) {
            $errors[] = 'First Name is required';
        }
        if (!$this->phone_number) {
            $errors[] = 'Phone number is required';
        }

        // echo "<pre>";
        // var_dump($errors, $newStudentData);
        // echo "</pre>";
        // die;
        if (!empty($errors)) {
            return $errors;
        } else {
            $this->DB->insert("user", $newStudentData);
            $_SESSION['first_name'] = $this->first_name;
            $_SESSION['last_name'] = $this->last_name;
            $_SESSION['user_role'] = $this->user_role;
            header('Location: /dashboard1');
            exit;
        }
    }

    public function login($data)
    {
        $this->last_name = $data['last_name'];
        $this->password = $data['password'];

        $data1 = [
            "last_name='$this->last_name'",
            "password='$this->password'"
        ];

        $errors = [];
        if (!$this->password) {
            $errors[] = 'Password is required';
        }
        if (!$this->last_name) {
            $errors[] = 'First Name is required';
        }

        if (!empty($errors)) {
            return $errors;
        }
        $results = $this->DB->select('user')->where($data1)->query();
        if ($results) {

            if (!empty($_SESSION)) {
                // $_SESSION = array();
                // // Destroy the session
                // session_destroy();
                header('Location: /dashboard1');
                exit;
            } else {
                session_start();
                // var_dump($results);
                // var_dump($_SESSION);
                // die;
                foreach ($results as $result) {
                $_SESSION['first_name'] = $result['first_name'];
                $_SESSION['last_name'] = $result['last_name'];
                $_SESSION['user_role'] = $result['user_role'];
                }
                header('Location: /dashboard1');
                exit;
            }
        } else {
            $errors[] = "Password or email missing";
        }
        return $errors;
    }
}
