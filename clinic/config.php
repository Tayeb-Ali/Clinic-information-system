<?php
/**
 * Created by PhpStorm.
 * User: Eltayeb
 * Date: 5/4/2017
 * Time: 11:35 AM
 */

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "myclinicdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
?>