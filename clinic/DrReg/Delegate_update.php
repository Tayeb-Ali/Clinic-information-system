<?php
/**
 * Created by PhpStorm.
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
//last nsme
$name2 = trim($_POST['name2']);
$name2 = strip_tags($name2);
$name2 = htmlspecialchars($name2);
//data of birth
$iDob = trim($_POST['expiry_date']);
$iDob = strip_tags($iDob);
$iDob = htmlspecialchars($iDob);
//Blood group :
$type = trim($_POST['type']);
$type = strip_tags($type);
$type = htmlspecialchars($type);
//Tell
$manufacture = trim($_POST['manufacture']);
$manufacture = strip_tags($manufacture);
$manufacture = htmlspecialchars($manufacture);
//dele
$IDde =trim($_POST['IDde']);
$IDde = strip_tags($IDde);
$IDde = htmlspecialchars($IDde);
if (isset($_POST['submit'])) {
    $sql = "UPDATE patient_health set firstname='$name',lastname='$name2',DOB='$iDob',bloodgroup='$type',Tell='$manufacture' 
WHERE 	HEALTH_ID='$IDm'";
    if ($conn->query($sql) === TRUE) {
        echo "Record is Update successfully";
        echo '<META http-equiv="refresh" content="5;patients.php">';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
elseif (isset($_POST['submit2']))
{
    $sql = "DELETE FROM patient_health WHERE HEALTH_ID='$IDde'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }


}
$conn->close();
?>


