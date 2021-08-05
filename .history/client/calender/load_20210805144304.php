<?php

//load.php

$connect = new PDO('mysql:host=localhost;dbname=mini_project', 'root', '');

if(isset($_SESSION['email']) && isset($_SESSION['login']) && isset($_SESSION['client'])){
    
    $email = $_SESSION['email'];

    $data = array();

    $query = "SELECT * FROM events ORDER BY id WHERE email=:email";

    $statement = $connect->prepare($query);

    $statement->execute([':email' => $email]);

    $result = $statement->fetchAll();

    foreach($result as $row)
    {
        $data[] = array(
            'id'   => $row["id"],
            'title'   => $row["title"],
            'description' => $row['description_'],
            'start'   => $row["start_"],
            'end'   => $row["end_"],
            'color' => $row["color"]
        );
    }

    echo json_encode($data);
}


?>