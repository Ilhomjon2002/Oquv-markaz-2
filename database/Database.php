<?php
namespace app\database;
use mysqli;
class Database
{
    private $host;
    private $username;
    private $password;
    private $database;

    private $connection;
    private $sql;

    public function __construct($host, $username, $password, $database)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        $this->connect();
    }


    private function connect()
    {
        // Ma'lumotlar bazasiga ulanish
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->connection->connect_error) {
            die("Xato: Ma'lumotlar bazasiga ulanish muvaffaqiyatli amalga oshmadi. " . $this->connection->connect_error);
        }
    }

    public function query()
    {
        // So'rovni kiritish
        // $result = $this->query($this->sql);

        // echo "<pre>";
        // var_dump($this->sql);
        // echo "</pre>";
        // die;

        $result = $this->connection->query($this->sql);
        // $result = $mysqli -> query($sql);

        // $result=$result->fetch_assoc();
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        // $row = $result->fetch_assoc();

        return $rows;
    }

    public function insert_query($query){
        $this->sql .=$query;
        return $this;
    }

    public function insert($table, $data)
    {
        // jadvalga ma'lumotlarni kiritish
        //Masalan:

        // $newStudentData = [
        //     "FirstName" => "John",
        //     "LastName" => "Doe",
        //     "DateOfBirth" => "2000-05-15",
        //     "ContactInfo" => "john@example.com",
        //     "EnrollmentDate" => "2023-10-15"
        // ];

        // // Ma'lumotlarni "Students" jadvallariga qo'shish
        // $result = $database->insert("Students", $newStudentData);

        $columns = implode(", ", array_keys($data)); 
        $values = "'" . implode("', '", array_values($data)) . "'";
        $this->sql .= "INSERT INTO $table ($columns) VALUES ($values)";
        if ($this->connection->query($this->sql) === TRUE) {
            echo "Ma'lumotlar bazasiga muvaffaqiyatli qo'shildi";
        } else {
            echo "Xatolik: " . $this->sql . "<br>" . $this->connection->error;
        }
    
        // Ulanishni yopish
        $this->connection->close();
        // var_dump($this->sql);
        // die;
        return $this;
    }

    public function update($table, $data, $where)
    {
        // Ma'lumotlarni yangilash uchun funksiya

        // $updatedStudentData = [
        //     "FirstName" => "Jane",
        //     "ContactInfo" => "jane@example.com",
        // ];

        // // "Students" jadvallarida "StudentID" qiymati 1 bo'lgan o'quvchini o'zgartiramiz
        // $studentID = 1;

        // // Ma'lumotlarni "Students" jadvallarida o'zgartiramiz
        // $result = $database->update("Students", $updatedStudentData, "StudentID = $studentID");

        $updates = [];
        foreach ($data as $key => $value) {
            $updates[] = "$key = '$value'";
        }
        $set = implode(", ", $updates);
        $this->sql = "UPDATE $table SET $set WHERE $where";
        return $this;
        // ->query($this->sql);
    }

    public function delete($table, $where)
    {
        // Jadvaldagi Ma'lumotni o'chirish uchun funksiya

        // $database = new Database("localhost", "username", "password", "oquv_markazi");
        // // O'chiriladigan o'quvchi ID-si
        // $studentID = 1;
        // "Students" jadvallaridan o'quvchini o'chiramiz
        // $result = $database->delete("Students", "StudentID = $studentID");
        $this->sql = "DELETE FROM $table WHERE $where";
        return $this;
        // ->query($this->sql);
    }

    public function select($table,$data="*")
    {
        $this->sql="SELECT $data FROM $table";
        // Tanlash uchun shartlar
        // die($sql);

        
        // $data = [];
        // while ($row = $result->fetch_assoc()) {
        //     $data[] = $row;
        // }
        // var_dump($data);
        // die();
        return $this;
    }

    public function where($conditions)
    {
        // $conditions = [
        //     "EnrollmentDate > '2023-01-01'",
        //     "FirstName = 'John'",
        // ];
        // "Students" jadvallarini tanlaymiz
        // $database->select("Students")->where($conditions);
        // die($conditions);

        if (!empty($conditions)) {
            $where = "WHERE " . implode(" AND ", $conditions);
            $this->sql .= " $where";
        }
        // var_dump($this->sql);
        // die();
        return $this;
    }

    public function search($table, $searchName)
    {
        // qidirish uchun funksiya
        // $searchName = "John"; // Izlanadigan ism
        // $results = $database->search("Students", $searchName);
        $this->select($table);

        if (!empty($searchName)) {
            $searchName = $this->connection->real_escape_string($searchName); // SQL injektsiyasini oldini olish
            $where = "WHERE FirstName LIKE '$searchName%'";
            $this->sql .= " $where";
        }

        return $this;
    }

    public function join($table, $on, $type = 'INNER')
    {
        // "Students" jadvallarini tanlaymiz
        // $database->select("Students");

        // // "Teachers" jadvalini "Teachers.ID = Students.TeacherID" sharti bilan ulaymiz
        // $database->join("Teachers", "Teachers.ID = Students.TeacherID", "LEFT");

        // // So'rovni amalga oshiramiz
        // $results = $database->query("SELECT Students.*, Teachers.Name AS TeacherName FROM Students");
        $this->sql .= " $type JOIN $table ON $on";
        return $this;
    }

    // public function __destruct(){
    //     var_dump($this->sql);
    //     $result = $this->query($this->sql);
    //     var_dump($result->fetch_assoc());
    //     // die();
    //     echo "<br>";
    // }

    public function close()
    {
        $this->connection->close();
    }
}
