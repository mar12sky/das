<?php

 // Include the database connection file
 require_once "./connection.php";
 date_default_timezone_set("Asia/Kolkata"); 
 // Check if the database connection was successful
 $sresult = pdo_connect_mysql()->query("SELECT * FROM sessions WHERE session_status = 'open'")->fetch(PDO::FETCH_ASSOC);

 if (!$_GET['session_id'] && !$sresult['session_id']) {
    //$pdo = pdo_connect_mysql();
     echo "no session found";     
     exit;

 } else {
     
     try {
        
        $session_id = $_GET['session_id'] ? $_GET['session_id'] : $sresult['session_id'];
       
        $pdo = pdo_connect_mysql();
        $stmt = $pdo->prepare('SELECT * FROM sessions WHERE session_id = ?');
        $stmt->execute([$_GET['session_id']]);
        $session = $stmt->fetch(PDO::FETCH_ASSOC);
        $sessionDate = date("d-m-Y", strtotime($session['session_date']));
         // Prepare the SQL query to add the five users
         //$statement = $pdo->prepare('SELECT * FROM sessions WHERE session_id = ?');
         //$statement = $pdo->prepare("SELECT delegates.id AS deid, delegates.name_en AS dename, delegates.name_hi AS dehname, delegates.div_no AS dediv, dummy.session_id AS dsesid, dummy.created_at AS dcreated FROM delegates INNER JOIN dummy ON dummy.delegate_id = delegates.id WHERE dummy.session_id = :session_id ORDER BY delegates.id ASC");
         $statement = $pdo->prepare("SELECT delegates.div_no AS dediv, dummy.created_at AS dcreated FROM delegates INNER JOIN dummy ON dummy.delegate_id = delegates.id WHERE dummy.session_id = :session_id ORDER BY delegates.id ASC");
         $statement->bindValue(':session_id', $session_id, PDO::PARAM_INT);
         // Execute the SQL query to add the five attendance
         $statement->execute();

         // Save the result in a variable named $users
         $attendances = $statement->fetchAll(PDO::FETCH_ASSOC);
        
         // Close the database connection
         $pdo = null;

     } catch (PDOException $e) {
         // Handle any PDO exceptions and display an error message if necessary
         echo $e->getMessage();
     }

 }

 // Section to download the CSV file

    // Define the filename
    $filename = "attendance_for_".$sessionDate."_exported_at_".date("d-m-Y H:i:s",time()).".csv";

    // Define the delimiter (separating character)
    $delimiter = ",";

    // Create a file pointer
    $f = fopen('php://memory', 'w');

    // Get the column names
    //$fields = array_keys(current($attendances));
    $fields = array("div_no", "attendance_marked", "session_date");
    //print_r($fields);
    // Write the column names to the CSV file
    fputcsv($f, $fields, $delimiter);
    //$session_date = date('Y-m-d H:i:s');
    // Write all the user records to the CSV file
    $values=array();
    foreach ($attendances as $attendance) {
        $attendance['session_date'] = $sessionDate;
        fputcsv($f, $attendance, $delimiter);    
        //print_r($attendance);
        // fputcsv($f, $values, $delimiter); 
        //print_r($attendance);
    }

    // Move the file pointer to the beginning of the file
    fseek($f, 0);

    // Set the HTTP headers to download the CSV file rather than displaying it
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');

    // Output all the remaining data on a file pointer
    fpassthru($f);

    // Close the file pointer
    fclose($f);

    // Stop the PHP script
    exit;

?>