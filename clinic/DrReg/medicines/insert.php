<?php
/**
 * Created by PhpStorm.
 * User: Eltayeb
 * Date: 5/8/2017
 * Time: 7:45 PM
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
		// اسم الدواء
		$name = trim($_POST['name']);
		$name = strip_tags($name);
		$name = htmlspecialchars($name);
		//تاريخ الانتهاء
		$expiry_date = trim($_POST['expiry_date']);
		$expiry_date = strip_tags($expiry_date);
		$expiry_date = htmlspecialchars($expiry_date);

		$type = trim($_POST['type']);
		$type = strip_tags($type);
		$type = htmlspecialchars($type);
//Addree
		$manufacture =($_POST['manufacture']);
	    $manufacture = strip_tags($manufacture);
		$manufacture = htmlspecialchars($manufacture);

		//Insert Data in the DataBase
		$sql = "INSERT INTO medicane(name,expiry_date,type,manufacture)
		VALUES('$name','$expiry_date','$type','$manufacture')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo '<META http-equiv="refresh" content="5;http://localhost:82/clinic/DrReg/medicines/Addmedicine.php">
';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
