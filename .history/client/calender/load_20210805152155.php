<?php

//load.php
$connect = new PDO('mysql:host=localhost;dbname=mini_project', 'root', '');
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];

    
}


?>