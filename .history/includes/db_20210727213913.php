<?php 
     $server = "mysql:host=localhost;dbname=mini-project";
     $username = "root";
     $password = "";
     $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
     $db;


    try{
        $this->db = new PDO($this->server, $this->username, $this->password, $this->options);
        return $this->db;
    }
    catch (PDOException $e){
        echo "There is some problem in connection: " . $e->getMessage();
    }

    
?>