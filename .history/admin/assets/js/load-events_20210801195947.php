<?php
    include '../../includes/db.php';
    
    $ = "SELECT * FROM calender";
    $stmt = $db->prepare($stmt);
    $stmt->execute();

    $result = $stmt->fetchAll();
?>