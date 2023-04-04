<?php
$host = "db.uniasselvi.dev";
$user = "root";
$pass = "root";
$db = "producao";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Fail connect: " . $conn->connect_error);
}
