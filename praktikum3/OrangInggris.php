<?php

require_once "Melani.php";

class OrangInggris extends Melani{

    // Override
    public function ucapSalam()
    {
        echo "Hello My name is " . $this->nama;
    }
}