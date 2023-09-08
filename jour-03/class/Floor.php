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