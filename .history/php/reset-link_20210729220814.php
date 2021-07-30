<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    session_start();
    ob_start();
    require '../includes/db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST')