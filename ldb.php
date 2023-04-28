<?php
// Σύνδεση με τη βάση δεδομένων
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smarthome";

$conn = new mysqli($servername, $username, $password, $dbname);

// Έλεγχος σύνδεσης
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id = ;
$status = ;
// Λήψη των δεδομένων από το αίτημα AJAX
$id = $_POST['id'];
$status = $_POST['status'];

// Ενημέρωση της βάσης δεδομένων
$sql = "UPDATE lights SET status='$status' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  // Επιστροφή της νέας κατάστασης του κουμπιού στο JavaScript
  echo $status;
} else {
  echo "Error updating record: " . $conn->error;
}

// Κλείσιμο της σύνδεσης με τη βάση δεδομένων
$conn->close();
?>
