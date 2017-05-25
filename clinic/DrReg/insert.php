<?php
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
		// clean user inputs to prevent sql injections
		$fname = trim($_POST['fname']);
		$fname = strip_tags($fname);
		$fname = htmlspecialchars($fname);

		$lname = trim($_POST['lname']);
		$lname = strip_tags($lname);
		$lname = htmlspecialchars($lname);

		$iDob = trim($_POST['iDob']);
		$iDob = strip_tags($iDob);
		$iDob = htmlspecialchars($iDob);
//Gender
   $gender = trim($_POST['gender']);
   $gender = strip_tags($gender);
   $gender = htmlspecialchars($gender);

//BlodeG
		$BloodGroup = trim($_POST['BloodGroup']);
	  $BloodGroup = strip_tags($BloodGroup);
		$BloodGroup = htmlspecialchars($BloodGroup);
//comment
		$Comment = trim($_POST['Comment']);
		$Comment = strip_tags($Comment);
		$Comment = htmlspecialchars($Comment);
//Tell
		$tell =($_POST['tell']);
	//	$tell = strip_tags($tell);
	//	$tell = htmlspecialchars($tell);
//Addree
		$addree =($_POST['addree']);
	//	$addree = strip_tags($addree);
	//	$addree = htmlspecialchars($addree);


$sql = "INSERT INTO patient_health(firstname,lastname,DOB,gender,bloodgroup,comment,Tell,Address)
VALUES('$fname','$lname','$iDob','$gender','$BloodGroup','$Comment','$tell','$addree')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
   echo '<META http-equiv="refresh" content="2;dr.php">';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
