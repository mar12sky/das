<?php
header("Access-Control-Allow-Origin: *");
error_reporting(E_ALL);
include 'connection.php';
$pdo = pdo_connect_mysql();
$ip = $_POST['input'];
$msg = '';
$data = '';
if (!empty($_POST)) {
    $created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');

    try {
        $stmt = $pdo->prepare('INSERT INTO dummy (dummy_id, dummy_ip, created_at) VALUES (?, ?, ?)');
        $stmt->execute([NULL,$ip,$created]);
        $data = ["status"=>"success",
        "icon" => "success",
        "message" => "Attendance for session date"];//"Attendance for session date" .$date. "has been marked Successfully on "];
    } catch (PDOException $e) {
        // Corrected code to handle execution failure gracefully
        echo "Execution failed: " . $e->getMessage();
    }

    // $stmt = $pdo->prepare('INSERT INTO dummy (dummy_id, dummy_ip, created_at) VALUES (?, ?, ?)');
    // $stmt->execute([NULL],['172.30.12.46'],[NULL]);
    // $name = isset($_POST['session_name']) ? $_POST['session_name'] : '';
    // $date = isset($_POST['session_date']) ? $_POST['session_date'] : '';
    // $status ='open';
    // $pdo = pdo_connect_mysql();
    // $created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');
    // $ip = $_POST['input'];
    // $stmt = $pdo->prepare('INSERT INTO dummy VALUES (?, ?, ?)');
    // $status = $stmt->execute([NULL], [NULL], [NULL] );
    // // Output message
    
    // $count = $stmt->rowCount();

    // if($count =='0'){
    //     $msg = 'Faild!';
    // }
    // else{
    //     $msg = 'Created Successfully!';
    // }
}
echo json_encode($data);
?>
