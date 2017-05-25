<html><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Welcome - Main AdminCp</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
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
            <img src="../assets/img/logo.png" alt="Smiley face" height="42" width="42">
            <h3>Clinic information system</h3>

        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="../DrReg/dr.php">Patient registration</a>
                </li>
                <li>
                    <a href="../DrReg/patients.php">Patients</a>
                </li>
                <li>
                    <a href="../DrReg/medicines/">medicine Stor</a>
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
<div id="wrapper">
    <div class="container">
        <div class="page-header">
            <h3>Attention:</h3>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3 contenteditable="true">Alert: we Need new&nbsp;
                    <?php

                    include '../config.php';
                    $day =  date("Y-m-d");

                    $sql = "SELECT 	expiry_date,name FROM medicane where expiry_date <= '$day'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo '<form> <div class="form-group"><table class="table"><thead> <tr class="danger"><td><h4><al> Name: '. $row["name"]. " " . $row["expiry_date"]. "</td></tr></thead></table></div></form>";

                        }
                        $conn->close();
                    } else {
                        echo "0 results";
                    }
                    ?>
                  </h3> <h3 contenteditable="true">has Expith</h3>
            </div>
        </div>
    </div>
</div>
<script src="assets/jquery-1.11.3-jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!--?php ob_end_flush(); ?-->


</body></html>
