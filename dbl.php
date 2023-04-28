<?php
$host="localhost";
$username="root";
$password="";
$db_name="smarthome";

$conn = new mysqli($host, $username, $password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['L1'])) {
    $room_id = L1;
    $status = $_POST['L1'] ? 1 : 0;
    $sql->query("UPDATE lights SET status=$status WHERE id=$room_id");
}
if (isset($_POST['L2'])) {
    $room_id = L2;
    $status = $_POST['L2'] ? 1 : 0;
    $sql->query("UPDATE lights SET status=$status WHERE id=$room_id");
}
if (isset($_POST['L3'])) {
    $room_id = L3;
    $status = $_POST['L3'] ? 1 : 0;
    $sql->query("UPDATE lights SET status=$status WHERE id=$room_id");
}
if (isset($_POST['L4'])) {
    $room_id = L4;
    $status = $_POST['L4'] ? 1 : 0;
    $sql->query("UPDATE lights SET status=$status WHERE id=$room_id");
}
if (isset($_POST['L5'])) {
    $room_id = L5;
    $status = $_POST['L5'] ? 1 : 0;
    $sql->query("UPDATE lights SET status=$status WHERE id=$room_id");
}
?>


