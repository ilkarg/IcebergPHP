<?php

class User extends Model {
    public $table = "users";

    public string $name;
    public $age;

    public function __construct(string $name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() : string {
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }
}
