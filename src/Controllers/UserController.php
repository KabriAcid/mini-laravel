<?php

namespace MyApp\Controllers;

class UserController
{
    public $name;
    public $gender;
    public function __construct($name, $gender)
    {
        $this->name = $name;
        global $gender;
        $gender = $this->gender;
    }
    public function message()
    {
        if($gender = 'M'){
            $txt = "Congratulations! Dear {$this->name}, you are a {$this->gender}.";
        } else {
            $txt = "Dear {$this->name}, you are not eligible.";
        }
        echo $txt;
    }
}


