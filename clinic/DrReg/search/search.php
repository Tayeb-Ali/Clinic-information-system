<html><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Search Patient</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
</head><body>
<div class="cover">
    <div class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="/clinic"></a>
                    </li>
                    <li>
                        <a href="/clinic/contact/">Contacts</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="http://localhost:82/clinic/assets/img/logo.png" alt="Smiley face" height="42" width="42">
                <h3>Clinic information system</h3>
            </div>
            <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="http://localhost:82/clinic"></a>
                    </li>
                    <li>
                        <a href="http://localhost:82/clinic/DrReg/">Admin Cp</a>
                    </li>
                    <li>
                        <a href="http://localhost:82/clinic/contact">Contacts</a>
                    </li>
                    <li>
                        <a href="http://localhost:82/clinic/DrReg/search">Parents</a>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
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

		$tellnumber =($_POST['tellnumber']);


$sql = "select * FROM patient_health WHERE Tell = '$tellnumber'";
$sql1 = mysqli_query($conn,$sql);

//main of Table
echo '
<div class="container">
    <h2>بينات الطالب </h2>
    <table class="table">
        <thead>
        
        
        <tbody>';

while ($row = mysqli_fetch_array($sql1)) {
    echo ' <tr><th>ID :',' <th>', $row['HEALTH_ID'],'</th> </tr>';
    echo ' <tr><th>First Name :</th>',' <th>', $row['firstname'],'</th> </tr>';
    echo ' <tr><th>Last Name :</th>',' <th>', $row['lastname'],'</th> </tr>';
    echo ' <tr><th>Date of Bareth:</th>',' <th>', $row['DOB'],'</th> </tr>';
    echo ' <tr><th>Gender :</th>',' <th>', $row['gender'],'</th> </tr>';
    echo ' <tr><th>Blood Group :</th>',' <th>', $row['bloodgroup'],'</th> </tr>';
    echo ' <tr><th>Comment of Dr :</th>',' <th>', $row['comment'],'</th> </tr>';
    echo ' <tr><th>Tell :</th>',' <th>', $row['Tell'],'</th> </tr>';
    echo ' <tr><th>Address :</th>',' <th>', $row['Address'],'</th> </tr> </thead>';
  # code...
}
$conn->close();
?>
<a class="left carousel-control" href="#fullcarousel-example" data-slide="prev"><i class="icon-prev fa fa-angle-left"></i></a>
<a class="right carousel-control" href="#fullcarousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
<div class="navbar navbar-default navbar-static-top">
    <div class="container">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

