<?php 
     $server = "mysql:host=localhost;dbname=wms";
     $username = "root";
     $password = "";
     $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
     $conn;


    try{
        $this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
        return $this->conn;
    }
    catch (PDOException $e){
        echo "There is some problem in connection: " . $e->getMessage();
    }

    
?>