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

//	$tellnumber =($_POST['tellnumber']);


$sql = "SELECT * FROM `patient_health` ORDER BY `HEALTH_ID` ASC";
$sql1 = mysqli_query($conn,$sql);
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '
<script>
            function myFunction() {
                window.print();
            }
        </script>
<div class="container">
    <p></p>
  ';
// echo '<br />';
echo '  <table class="table">
        <thead>
         <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date of birth</th>
            <th>Gender</th>
            <th>Blood group</th>
            <th>Tell</th>
        </tr>
        </thead>
        <tbody>';
while ($row = mysqli_fetch_array($sql1)) {

    echo '
  <tr class="success"><td>' ,$row['HEALTH_ID'],'</td>','
  <td> ' ,$row['firstname'] ," ", $row['lastname'],'</td>' ,'
  <td>' ,$row['DOB'],'</td>' ,'
  <td>' ,$row['gender'],'</td>','
  <td>' ,$row['bloodgroup'],'</td>','
  <td>',$row['Tell']."</td>
</<tr>
   
<td></td>
</tr>";

}

$conn->close();
?>

<html><head>
    <script>
        function myFunction() {
            window.print();
        }
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Patients</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../style.css" type="text/css">
</head><body class="hidden-md hidden-xs" data-spy="scroll">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <img src="../assets/img/logo.png" alt="Smiley face" height="30" width="30" ali>
            <h4>Clinic information system</h4>
        </div>
        <br />
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="dr.php">Patient registration</a>
                </li>
                <li class="active">
                    <a href="patients.php">Patients</a>
                </li>
                <li>
                    <a href="medicines/medicine.php">medicine Stor</a>
                </li>
                <li>
                    <a href="medicines/Addmedicine.php">Add medicine</a>
                </li>
                <li>
                    <a href="../accs/report.php">Report</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                        <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <!--?php echo $userRow['userEmail']; ?-->&nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>

</nav>

<form action="Delegate_update.php" method="post">
    <span class="label label-default">ID</span>
    <input type="text" name= "IDm" value= "<?php echo $row['HEALTH_ID']; ?> "size=10>
    <span class="label label-default">Firstname</span>
    <input type="text" name= "name" value= "<?php echo $row['firstname']; ?> "size=10>
    <span class="label label-default">Lastname</span>
    <input type="text" name= "name2" value= "<?php echo $row['lastname']; ?> "size=10>
    <span class="label label-default">Data of Birth :</span>
    <input type="date" name= "expiry_date" value= "<?php echo $row['DOB']; ?> "size=10>
    <span class="label label-default">Blood group :</span>
    <input type="text" name= "type" value= "<?php echo $row['bloodgroup']; ?>" size=17>
    <span class="label label-default">Tell :</span>
    <input type="text" name= "manufacture" value= "<?php echo $row['Tell']; ?>" size=17>

    <button type="submit" class="btn btn-primary pull-right" id="btnContactUs" value="Update" name= "submit">Update</button><br>

    <span class="label label-default"> Delet: </span>
    <input type="text" title="ID delet" name= "IDde" value= "<?php $row['Tell']; ?>" size=17>
    <button type="submit" class="btn btn-primary pull-right" id="btnContactUs" value="delet" name="submit2">Delet</button>




</form>

<p><button onclick="myFunction()">Print this page</button></p>

</body></html>
