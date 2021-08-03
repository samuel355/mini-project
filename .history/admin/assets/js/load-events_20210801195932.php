<?php
    include '../../includes/db.php';
    
    $stmt = "SELECT * FROM calender";
    $stmt = $db->prepare($stmt);
    $stmt->execute();

    $result = $stmt->fetchAll()
?>