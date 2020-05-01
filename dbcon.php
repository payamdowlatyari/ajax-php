<?php

//build the connection variable and assign database credentials
$conn = mysqli_connect('localhost', 'root', '', 'products');

//if DB connection fails, get a error message
if (!$conn) {
    die('Connection Failed' . mysqli_connect_error());
}

// $dsn = "localhost"; // must create db named ssdb
// $username = "root";
// $password = "";
// $db = "products";

// try {
//     $pdo = new PDO($dsn, $username, $password, $db);
//     // set the PDO error mode to exception
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected to DB<br>";
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }