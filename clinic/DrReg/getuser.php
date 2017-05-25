<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, td, th {
            border: 1px solid black;
            padding: 5px;
        }

        th {text-align: left;}
    </style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','myclinicdb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM patient_health WHERE HEALTH_ID = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>town</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['lastname'] . "</td>";
    echo "<td>" . $row['DOB'] . "</td>";
    echo "<td>" . $row['Address'] . "</td>";

    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>