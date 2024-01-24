<?php

namespace app\models;
use app\database\Database;


class Teacher{

    private array $teachers;
    private $DB;

    public function __construct(){
        $this->DB=new Database($host="localhost",$username="root",$password="",$databace="oquv_markaz");
    }

    public function get_teachers(){
        session_start();
        if($_SESSION['user_role']==='3'){
            $this->teachers=$this->DB->select("user")->where(["user_role=2"])->query() ?? [];
            return $this->teachers;
        }
        else{
            // die("xayr");
            header("Location: /");
            exit;
        }
    }
}

?>