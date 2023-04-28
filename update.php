<?php
if(isset($_GET['value'])) {
    $conn = new mysqli('localhost','root','', 'smarthome');

    if($conn->connect_error){
        die('Connection Failed :' .$conn->connect_error);}
    

    // Λήψη τιμής από το checkbox
    $value = $_GET['value'];

    // Ενημέρωση της βάσης δεδομένων με τη νέα τιμή του checkbox
    $sql = "UPDATE lights SET status = $value WHERE id = 'L1'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>