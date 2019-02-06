<?php

Class DB{
    protected $mysqli;

    public function __construct(){
        $this->mysqli = new mysqli('localhost', 'root','', 'twitter');
    }
    public function query($sql){
        return $this->mysqli->query($sql);
    }

}