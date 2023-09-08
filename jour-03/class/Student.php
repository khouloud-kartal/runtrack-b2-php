<?php

class Student{

    private ?int $id;
    private ?int $grade_id;
    private ?string $email;
    private ?string $fullname;
    private ?datetime $birthdate;
    private ?string $gender;
    public $conn;

    public function __construct($id = null, $grade_id = null, $email = null, $fullname = null, $birthdate = null, $gender = null){

        $this->id = $id;
        $this->grade_id = $grade_id;
        $this->email = $email;
        $this->fullname = $fullname;
        $this->birthdate = $birthdate;
        $this->gender = $gender;
    }

    /////////////////////////// geters ///////////////////////////

    public function getId(){
        return $this->id;
    }

    public function getGradeId(){
        return $this->grade_id;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getFullName(){
        return $this->fullname;
    }

    public function getBirthDate(){
        return $this->birthdate;
    }

    public function getGender(){
        return $this->gender;
    }

    /////////////////////////// seters /////////////////////
    
    public function setId(int $id){
        $this->id = $id;
    }

    public function setGradeId(int $grade_id){
        $this->grade_id = $grade_id;
    }


    public function setEmail(string $email){
        $this->email = $email;
    }

    public function setFullName(string $fullname){
        $this->fullname = $fullname;
    }

    public function setBirthDate(datetime $birthdate){
        $this->birthdate = $birthdate;
    }

    public function setGender(string $gender){
        $this->gender = $gender;
    }
}
