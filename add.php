<?php

$name = $_POST['name'];
$comment = $_POST['comment'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "electro";

$conn = new mysqli($servername, $username, $password, $dbname);

$sqlSelect = "INSERT INTO comments (Name, Comment) VALUES ('$name', '$comment')";
$result = $conn->query($sqlSelect);


header("Location: index.php");
exit;

?>
