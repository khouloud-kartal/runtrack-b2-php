<?php

class Room{

    private ?int $id;
    private ?int $floor_id;
    private ?string $name;
    private ?int $capacity;

    public function __construct($id = null, $floor_id = null, $name = null, $capacity = null){
        $this->id = $id;
        $this->floor_id = $floor_id;
        $this->name = $name;
        $this->capacity = $capacity;
    }

    /////////////////////////// geters ///////////////////////////

    public function getId(){
        return $this->id;
    }

    public function getFloorId(){
        return $this->floor_id;
    }

    public function getName(){
        return $this->name;
    }

    public function getCapacity(){
        return $this->capacity;
    }

    /////////////////////////// seters /////////////////////
    
    public function setId(int $id){
        $this->id = $id;
    }

    public function setFloorId(int $floor_id){
        $this->floor_id = $floor_id;
    }


    public function setName(string $name){
        $this->name = $name;
    }

    public function setcapacity(int $capacity){
        $this->capacity = $capacity;
    }
}