<?php

class database{

    private $host = "localhost";
    private $user = "root";
    private $db = "db_auresume";
    private $password = "";
    private $user_data = null;


    function __construct(){
        $this->user_data = new mysqli($this->host,$this->user, $this->password, $this->db); 
    }

    public function connect(){
        return $this->user_data;
    }

}

$db = new database();
$db = $db->connect();