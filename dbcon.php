<?php
$host="localhost";
$username="root";
$password="";
$db_name="smarthome";

$conn = new mysqli($host, $username, $password, $db_name);

// Έλεγχος σύνδεσης
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['username']) && ($_POST['password'])){
$username = $_POST["username"];
$userpass = $_POST["password"];

$sql = "SELECT * FROM log WHERE username='$username' AND password='$userpass'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    header("Location: Main.php");
} else {
    // Εμφάνιση μηνύματος λάθους
    echo "Λάθος όνομα χρήστη ή κωδικός πρόσβασης";
}
}

mysqli_close($conn);
?>