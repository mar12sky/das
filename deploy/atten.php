<?php include 'connection.php';?>
<?php 
$pdo = pdo_connect_mysql();
try {  
    // Retrieve the user's name and associated list items
        $sql = "SELECT *
                FROM attendances
                LEFT JOIN deligates
                USING (attendances_id, deligates_id)
                WHERE Id = session_id";
    
        $stmt = $pdo->prepare($sql); // Prepare the statement
        //if($stmt->execute(array($_POST['user_id'])))
        if($stmt->execute(array(1)))
        {
    
            // Loop through the returned results
            while($row = $stmt->fetch()) {
    
                // Save the user name
                //$name = $row['name'];
    
                // Create an array of items
                //$items[] = $row['comment'];
                print_r($row);
            }
    
            $stmt->closeCursor(); // Free memory used in this query
    
            // Output the user's name and identify what we're displaying
            //echo "$name List<br /><br />n";
    
            // Loop through the items and output to the browser
            // foreach($items as $item) {
            //     echo $item, "<br />";
            // }
        }
    
    }
    // Any errors?
    catch(PDOException $e) {  
    print "Error!: " . $e->getMessage() . "<br/>";
        }
    
?>