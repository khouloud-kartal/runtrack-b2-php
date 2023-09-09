<?php

class Grade{

    private ?int $id;
    private ?int $room_id;
    private ?string $name;
    private ?datetime $year;

    public function __construct($id = null, $room_id = null, $name = null, $year = null){
        $this->id = $id;
        $this->room_id = $room_id;
        $this->name = $name;
        $this->year = $year;
    }

    public function getStudents() : ?array{
        $conn = connect(); 
        $req = $conn->prepare("SELECT * FROM student WHERE grade_id = :id");
        $req->execute([':id' => $this->id]);
        $data = $req->fetchAll(\PDO::FETCH_ASSOC);

        $students = [];
        foreach ($data as $student) {

            $students[] = new Student(
                $student['id'], 
                $student['grade_id'], 
                $student['email'],
                $student['fullname'],
                new DateTime($student['birthdate']),
                $student['gender']
            );

        }
        
        return $students;
        
    }

    /////////////////////////// geters ///////////////////////////

    public function getId(){
        return $this->id;
    }

    public function getRoomId(){
        return $this->room_id;
    }

    public function getName(){
        return $this->name;
    }

    public function getYear(){
        return $this->year;
    }

    /////////////////////////// seters /////////////////////
    
    public function setId(int $id){
        $this->id = $id;
    }

    public function setRoomId(int $room_id){
        $this->room_id = $room_id;
    }


    public function setName(string $name){
        $this->name = $name;
    }

    public function setYear(datetime $year){
        $this->year = $year;
    }

}