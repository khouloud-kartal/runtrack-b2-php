<?php

function find_full_rooms(){
    try {
        $conn = new PDO('mysql:host=localhost;dbname=lp_official', 'root', '');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $req = $conn->prepare("SELECT ");

    $req->execute();

    $data = $req->fetchAll(\PDO::FETCH_ASSOC);

    var_dump($data);

    return $data;
}

find_full_rooms();

?>