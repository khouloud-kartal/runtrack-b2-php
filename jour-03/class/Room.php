<?php

class Room{

    public ?int $id;
    public ?int $floor_id;
    public ?string $name;
    public ?int $capacity;

    public function __construct($id = null, $floor_id = null, $name = null, $capacity = null){
        $this->id = $id;
        $this->floor_id = $floor_id;
        $this->name = $name;
        $this->capacity = $capacity;
    }
}