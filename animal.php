<?php
 class Animal {
    public $name;
    public function __construct($name) {
        $this->name = $name . "<br>";
    }
    public $legs = 4 . "<br>";
    public $cold_blooded = "no" . "<br>";
 }
?>