<?php
$conn = new mysqli("localhost", "root", "", "hostel");

$name = $_POST['name'];
$email = $_POST['email'];
$room = $_POST['room'];

$conn->query("INSERT INTO users (name, email, room_number) VALUES ('$name', '$email', '$room')");
echo "Room allocated successfully!";
?>
