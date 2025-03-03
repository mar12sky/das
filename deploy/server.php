<?php
// $json = file_get_contents("http://localhost:3500/json.php");
// $data = json_decode($json, true);
// print_r($data);

header("Access-Control-Allow-Origin: *");
date_default_timezone_set("Asia/Kolkata"); 
error_reporting(E_ALL);
include 'connection.php';
$ip = $_POST['input'];
//echo '<br>';
$did = $_POST['delegate_id'];
//echo '<br>';
$msg = '';
$data = '';
$time = date('H:i:s');
$adate = date('d-m-Y');
$sresult='';
$aresults ='';
$currentSession_id = '';
$pdo = pdo_connect_mysql();
if (!empty($_POST)) {
    
    // Getting Session detail
    $sresult = pdo_connect_mysql()->query("SELECT * FROM sessions WHERE session_status = 'open'")->fetch(PDO::FETCH_ASSOC);               
    if ($sresult) {        
        //echo "Open sessions found."; 
        //print_r($sresult);
        // Getting Attendance
        $stmt = pdo_connect_mysql()->prepare("SELECT * FROM dummy WHERE dummy_ip = :ip AND delegate_id = :did AND session_id = :session_id");                
        // Bind the values to the placeholders
        $stmt->bindParam(':ip', $ip, PDO::PARAM_STR);
        $stmt->bindParam(':did', $did, PDO::PARAM_INT);
        $stmt->bindParam(':session_id', $sresult['session_id'], PDO::PARAM_INT);
        // Execute the prepared statement
        $stmt->execute();

        // Fetch all results
        $aresults = $stmt->fetch(PDO::FETCH_ASSOC); 
            //print_r($aresults);
            // Attendance Already Punched
        if($aresults){
            $t = date("H:m:s", strtotime($aresults['created_at']));
            $d = date("d-m-Y", strtotime($aresults['created_at']));
            $data = ["status"=>"success",
            "debug" => "Attendance Already Punched",
            "message" => "Attendance for session date ".$session_date." has already been marked Successfully on ".$d." at ".$t];
        } else{
            // Punching Attendance
            $created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');
            $stmt = pdo_connect_mysql()->prepare('INSERT INTO dummy (dummy_id, dummy_ip, delegate_id, session_id, created_at) VALUES (?, ?, ?, ?, ?)');
            $stmt->execute([NULL, $ip, $did, $sresult['session_id'], $created]);
            $data = ["status"=>"success",        
            "message" => "Attendance for session date ".$adate." has been marked Successfully on ".$adate." at ".$time];//"Attendance for session date" .$date. "h "];
        }
    } else {
        // No Open session found
        $data = ["status"=>"failed",
        "debug" => "No open Session Found",           
        "message" => "Attendance not allowed. No Session is running."];
    }
} else {
    //echo "No inputs found.";
    $data = ["status"=>"failed",
    "debug" => "No inputs",           
    "message" => "Connection lost with server."];
}
  
echo json_encode($data);
?>