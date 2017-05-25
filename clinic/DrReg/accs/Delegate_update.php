<?php
/**
 * Created by PhpStorm.
 * User: Eltayeb
 * Date: 5/8/2017
 * Time: 7:29 PM
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
$IDm = trim($_POST['IDm']);
$IDm = strip_tags($IDm);
$IDm = htmlspecialchars($IDm);
// clean user inputs to prevent sql injections
$name = trim($_POST['name']);
$name = strip_tags($name);
$name = htmlspecialchars($name);


$iDob = trim($_POST['expiry_date']);
$iDob = strip_tags($iDob);
$iDob = htmlspecialchars($iDob);

$type = trim($_POST['type']);
$type = strip_tags($type);
$type = htmlspecialchars($type);
//Gender
$manufacture = trim($_POST['manufacture']);
$manufacture = strip_tags($manufacture);
$manufacture = htmlspecialchars($manufacture);


$sql = "UPDATE medicane set name='$name',expiry_date='$iDob',type='$type',manufacture='$manufacture' 
WHERE MEDICANE_ID='$IDm'";
if ($conn->query($sql) === TRUE) {
    echo "Record is Update successfully";
    echo '<META http-equiv="refresh" content="5;http://localhost:82/clinic/DrReg/medicines/medicine.php">';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


