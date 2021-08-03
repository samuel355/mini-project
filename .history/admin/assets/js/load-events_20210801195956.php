<?php
    include '../../includes/db.php';
    
    $query = "SELECT * FROM calender";
    $stmt = $db->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll();
?>