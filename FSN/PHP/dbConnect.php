<?php

class DB {

    private $host = "104.155.46.200";
    private $db_user = "root";
    private $db_password = "root";
    private $db_name =  "Web";

    $database = new database();

    public function __construct(){

      $dsn = 'mysql:host=' . $this->host . ';db_name' . $this->db_name;
    }
}

?>
