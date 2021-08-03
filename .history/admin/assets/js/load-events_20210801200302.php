<?php
    include '../../includes/db.php';
    
    $data = array();
    $query = "SELECT * FROM calender ORDER BY id";
    $stmt = $db->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll();

    foreach($result as $row){
        $data [] = array(
            'id' => $row['id'],
            'title' => $row['title'],
        )
    }
?>