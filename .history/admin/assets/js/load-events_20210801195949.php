<?php
    include '../../includes/db.php';
    
    $query = "SELECT * FROM calender";
    $stmt = $db->prepare($stmt);
    $stmt->execute();

    $result = $stmt->fetchAll();
?>