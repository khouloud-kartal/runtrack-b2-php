<?php

require_once './class/Student.php';

$student = new Student(1, 1, 'email@email.com', 'Terry Cristinelli', new datetime('1990-01-18'), 'male');

$student = new Student();

$student->id = 1;
$student->grade_id = 1;
$student->email = 'email@email.com';
$student->fullname = 'Terry Cristinelli';
$student->birthdate = new datetime('1990-01-18');
$student->gender = 'male';

var_dump($student);