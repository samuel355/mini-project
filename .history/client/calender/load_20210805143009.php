<?php

//load.php

$connect = new PDO('mysql:host=localhost;dbname=mini_project', 'root', '');

if(isset($_SESSION['email']) && isset($_SESSION['login']) && isset($_SESSION['client'])){
    $email = $_SESSION['email'];
}


?>