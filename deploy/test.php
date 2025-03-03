<?php
error_reporting(E_ALL);
include 'connection.php';
$pdo = pdo_connect_mysql();

// $stmt = $pdo->query("SELECT * FROM sessions ORDER BY session_id DESC LIMIT 1");
// echo $session = $stmt->fetch();
$data = $pdo->query("SELECT session_id FROM sessions ORDER BY session_id DESC LIMIT 1")->fetchAll();
// and somewhere later:
//foreach ($data as $row) {
    //echo $row['session_id']."<br />\n";
//}

echo $data[0]['session_id'];