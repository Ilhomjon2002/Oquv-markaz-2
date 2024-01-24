<?php

namespace app\models;

use app\database\Database;

// require_once "../databace/Database.php";
// $DB=


class Dashboard
{

    private array $users;
    // private array $students;
    private $DB;
    public function __construct()
    {
        $this->DB = new Database($host = "localhost", $username = "root", $password = "", $database = "oquv_markaz");
    }

    public function get_students_count()
    {
        // session_start();
        $students = $this->DB->insert_query("SELECT COUNT(*) as student_count FROM user WHERE user_role = 1;")->query() ?? [];
        // Ma'lumotlarni chiqarish
        // while ($row = $students->fetch_assoc()) {
        //     echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Surname: " . $row["surname"] . "<br>";
        // }
        // echo "<pre>";
        // var_dump($students);
        // echo "</pre>";
        // die;
        // session_destroy();
        return $students[0];
    }
}
