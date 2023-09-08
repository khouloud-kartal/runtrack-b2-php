<?php

require_once './class/Student.php';
require_once './class/Grade.php';
require_once './class/Room.php';
require_once './class/Floor.php';


function connect(){
    try {
        $conn = new PDO('mysql:host=localhost;dbname=lp_official', 'root', '');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    return $conn;
}

function findOneStudent(int $id) : Student{
    $conn = connect();
    $req = $conn->prepare("SELECT * FROM student WHERE id = $id");
    $req->execute();
    $data = $req->fetchAll(\PDO::FETCH_ASSOC);
    return (new Student(
        $data[0]['id'],
        $data[0]['grade_id'],
        $data[0]['email'],
        $data[0]['fullname'],
        new dateTime($data[0]['birthdate']),
        $data[0]['gender'],
    ));
}

function findOneGrade(int $id) : Grade{
    $conn = connect(); 
    $req = $conn->prepare("SELECT * FROM grade WHERE id = $id");
    $req->execute();
    $data = $req->fetchAll(\PDO::FETCH_ASSOC);
    return (new Grade(
        $data[0]['id'],
        $data[0]['room_id'],
        $data[0]['name'],
        new dateTime($data[0]['year'])
    ));
}

function findOneFloor(int $id) : Floor{
    $conn = connect(); 
    $req = $conn->prepare("SELECT * FROM floor WHERE id = $id");
    $req->execute();
    $data = $req->fetchAll(\PDO::FETCH_ASSOC);
    return (new Floor(
        $data[0]['id'],
        $data[0]['name'],
        $data[0]['level']
    ));
}

function findOneRoom(int $id) : Room{
    $conn = connect(); 
    $req = $conn->prepare("SELECT * FROM room WHERE id = $id");
    $req->execute();
    $data = $req->fetchAll(\PDO::FETCH_ASSOC);
    return (new Room(
        $data[0]['id'],
        $data[0]['floor_id'],
        $data[0]['name'],
        $data[0]['capacity']
    ));
}

findOneStudent(5);
findOneGrade(1);
findOneFloor(1);
findOneRoom(1);