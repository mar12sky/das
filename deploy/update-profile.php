<?php
print_r($_POST);

include 'connection.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_POST['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = $_POST['id'];
        $name = isset($_POST['del_name_en']) ? $_POST['del_name_en'] : '';
        $hindi = isset($_POST['del_name_hi']) ? $_POST['del_name_hi'] : '';
        $div = isset($_POST['div_no']) ? $_POST['div_no'] : '';
        $ip = isset($_POST['ip']) ? $_POST['ip'] : '';
        $pin = isset($_POST['pin']) ? $_POST['pin'] : '';
        $created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');
        
        // Prepare the SQL statement
        $stmt = $pdo->prepare('UPDATE delegates SET id = ?, div_no = ?, name_en = ?, name_hi = ?, pics = ?, ip = ?, pin = ?, created = ? WHERE id = ?');

        // Bind the values to the placeholders
        $stmt->execute([$id, $div, $name, $hindi, $pics, $ip, $pin, $created, $id]);

        $msg = 'Updated Successfully!';
        header('Location: profile.php?id='.$id);
    }
}

    // Get the contact from the contacts table
    // $stmt = $pdo->prepare('SELECT * FROM contacts WHERE id = ?');
    // $stmt->execute([$_GET['id']]);
    // $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    // if (!$contact) {
    //     exit('Contact doesn\'t exist with that ID!');
    // }
else {
    exit('No ID specified!');
}
?>