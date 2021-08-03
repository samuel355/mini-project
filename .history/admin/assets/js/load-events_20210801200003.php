<?php
    include '../../includes/db.php';
    
    $query = "SELECT * FROM calender ORDERBY id";
    $stmt = $db->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll();
?>