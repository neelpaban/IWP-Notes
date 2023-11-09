<?php

$servername = "sql12.freesqldatabase.com";
$username = "sql12660625";
$password = "3K4MNkXf2b";
$db = "sql12660625";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
} catch (PDOException $e) {
    echo "Failed " . $e->getMessage();
}

?>