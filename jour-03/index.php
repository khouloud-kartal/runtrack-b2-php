<?php

require_once './class/Student.php';
require_once './class/Grade.php';
require_once './class/Room.php';
require_once './class/Floor.php';

$student = new Student(1, 1, 'email@email.com', 'Terry Cristinelli', new dateTime('1990-01-18'), 'male');

$student = new Student();

$grade = new Grade(1, 8, 'Bachelor 1', new dateTime('2023-01-09'));

$grade = new Grade();

$room = new Room(1, 1, 'RDC Food and Drinks', 90);

$room = new Room();

$floor = new Floor(1, 'Rez-de-chaussée', 0);

$floor = new Floor();

$student->id = 1;
$student->grade_id = 1;
$student->email = 'email@email.com';
$student->fullname = 'Terry Cristinelli';
$student->birthdate = new datetime('1990-01-18');
$student->gender = 'male';

$grade->id = 1;
$grade->room_id = 8;
$grade->name = 'Bachelor 1';
$grade->year = new dateTime('2023-01-09');

$room->id = 1;
$room->floor_id = 1;
$room->name = 'RDC Food and Drinks';
$room->capacity = 90;

$floor->id = 1;
$floor->name = 'Rez-de-chaussée';
$floor->level = 0;

//var_dump($student, $grade, $room, $floor);