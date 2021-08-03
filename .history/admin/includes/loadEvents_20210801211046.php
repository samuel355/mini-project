<?php
    include '../../includes/db.php';
    
    $query = "SELECT * FROM calender ORDER BY id";
    $stmt = $db->prepare($query);
    $data = array();
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    while($result as $row){
        $data [] = array(
            'id' => $row['id'],
            'title' => $row['title'],
            'start' => $row['start_date'],
            'end' => $row['end_date'],
            'email' => $row['email'],
        );
    }

    echo json_encode($data);
?>