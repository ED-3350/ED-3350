<?php

class IndexModel {

    protected $db;

    public function __construct() {
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();
    }//Fin del constructor.

//   
}
?>