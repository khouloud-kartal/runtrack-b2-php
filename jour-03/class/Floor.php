<?php

class Floor{

    private ?int $id;
    private ?string $name;
    private ?int $level;

    public function __construct($id = null, $name = null, $level = null){
        $this->id = $id;
        $this->name = $name;
        $this->level = $level;
    }

    public function getRooms() : ?array{
        $conn = connect(); 
        $req = $conn->prepare("SELECT * FROM room WHERE floor_id = :id");
        $req->execute([':id' => $this->id]);
        $data = $req->fetchAll(\PDO::FETCH_ASSOC);

        $rooms = [];

        foreach ($data as $room) {

            $rooms[] = new Room(
                $room['id'], 
                $room['floor_id'], 
                $room['name'],
                $room['capacity']
            );

        }
        
        return $rooms;
        
    }

    /////////////////////////// geters ///////////////////////////

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getLevel(){
        return $this->level;
    }

    /////////////////////////// seters /////////////////////
    
    public function setId(int $id){
        $this->id = $id;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function setLevel(int $level){
        $this->level = $level;
    }
}