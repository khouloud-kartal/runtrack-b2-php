<?php

class Student{

    public ?int $id;
    public ?int $grade_id;
    public ?string $email;
    public ?string $fullname;
    public ?datetime $birthdate;
    public ?string $gender;

    // 

    public function __construct($id, $grade_id, $email, $fullname, $birthdate, $gender){
        $this->id = $id;
        $this->grade_id = $grade_id;
        $this->email = $email;
        $this->fullname = $fullname;
        $this->birthdate = $birthdate;
        $this->gender = $gender;
    }
    
}
