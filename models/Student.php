<?php

namespace app\models;
use app\database\Database;


class Student{
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
    private array $users;
    private $DB;
    public function __construct(){
        $this->DB=new Database($host="localhost", $username="root", $password="", $database="oquv_markaz");
    }

    public function get_users()
    {
        session_start();
        // $users=[];
        if (!empty($_SESSION["user_role"])) {
            if ($_SESSION['user_role'] === '3') {
                $this->users = $this->DB->select("user")->where(["user_role=1"])->query() ?? [];
                return $this->users;
            }
        } else {
            header('Location: /');
            exit;
        }
        // var_dump($this->users);
        // die;
    }

}