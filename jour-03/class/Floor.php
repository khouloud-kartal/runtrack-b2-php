<?php

class Floor{

    public ?int $id;
    public ?string $name;
    public ?int $level;

    public function __construct($id = null, $name = null, $level = null){
        $this->id = $id;
        $this->name = $name;
        $this->level = $level;
    }
}