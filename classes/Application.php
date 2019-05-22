<?php

class Application 
{
    public $db;
    //instancira Dbase klasu i uzima funkcije
    public function __construct() 
    {
        $this->db = new Dbase();
    }
}
?>