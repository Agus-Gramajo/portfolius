<?php

class project
{
    public $name;
    public $description;
    public $image;
    public $tech;
    public $gitHub;
    public $mail;
    public $linkedin;

    public function __construct($name, $description, $image, $tech, $gitHub, $mail, $linkedin)
    {

        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->tech = $tech;
        $this->gitHub = $gitHub;
        $this->mail = $mail;
        $this->linkedin = $linkedin;
    }
}
