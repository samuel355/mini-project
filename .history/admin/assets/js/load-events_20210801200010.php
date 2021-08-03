<?php
    include '../../includes/db.php';
    
    $query = "SELECT * FROM calender ORDER BY id";
    $stmt = $db->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll();
?>