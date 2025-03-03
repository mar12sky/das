<?php           
header("Access-Control-Allow-Origin: *");
error_reporting(E_ALL);
include 'connection.php';
if (isset($_GET['ip'])) {
    $pdo = pdo_connect_mysql();
    $data='';
    $stmt = $pdo->prepare('SELECT * FROM delegates WHERE ip = ?');
    $stmt->execute([$_GET['ip']]);
    
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    $name = $contact['name_en'];
    $div = $contact['div_no'];  
    $id = $contact['id'] ;
    $pin = trim($contact['pin'] ," "); //$contact['pin'] ;
    ?>
    <?php 
    if (!$contact) {
        //exit('Delegate doesn\'t exist in our record!');
        $data = ["status"=>"faild",
        "message" => "Delegate not found"];        
    } else {
        //exit('No ID specified!');
        $data = ["status"=>"success",
        "name" => $name,
        "div" => $div,
        "id" => $id,
        "pin" => $pin
        ];     
        
    }
    echo json_encode($data);
}
?>
