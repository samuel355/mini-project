<?php
    include '../../includes/db.php';
    
    $query = "SELECT * FROM calender";
    $stmt = $db->prepare($q);
    $stmt->execute();

    $result = $stmt->fetchAll();
?>