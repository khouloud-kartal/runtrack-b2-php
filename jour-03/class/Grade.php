<?php

class Grade{

    public ?int $id;
    public ?int $room_id;
    public ?string $name;
    public ?datetime $year;

    public function __construct($id = null, $room_id = null, $name = null, $year = null){
        $this->id = $id;
        $this->room_id = $room_id;
        $this->name = $name;
        $this->year = $year;
    }
}