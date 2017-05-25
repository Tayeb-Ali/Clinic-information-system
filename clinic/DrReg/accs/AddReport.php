<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Add New Medicine</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../style.css" type="text/css">
    <script type="text/javascript" src="../../assets/js/jquery.min.js"></script>

</head>
    <body>
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
           
                    <img src="../assets/img/logo.png" alt="Smiley face" height="30" width="30">
                    <h4>Clinic information system</h4>
                </div>
                <br />
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                      <li>
                            <a href="../DrReg/dr.php">Patient registration</a>
                        </li>
                        <li>
                            <a href="../DrReg/patients.php">Patients</a>
                        </li>
                        <li>
                            <a href="../DrReg/medicines/medicine.php">medicine Stor</a>
                        </li>
                        <li>
                            <a href="../DrReg/medicines/Addmedicine.php">Add medicine</a>
                        </li>
                        </li>
                        <li class="active">
                            <a href="/clinic/DrReg/accs/report.php">Report</a>
                        </li>
                        <li >
                            <a href="/clinic/DrReg/accs/AddReport.php">Add Report</a>
                        </li>
                    </ul>
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <img src="/clinic/assets/img/logo.png" alt="Smiley face" height="42" width="42">
            <h3>Clinic information system</h3>
            
          </div>



          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                 
              <li>
                <a href="../dr.php">Patient registration</a>
              </li>
              <li>
                <a href="../patientsjsoin.php">Patients</a>
              </li>
              <li>
                <a href="../medicines/medicine.php">medicine Stor</a>
              </li>
                 <li>
                <a href="../medicines/Addmedicine.php">Add Medicine</a>
              </li>
                <li>
                    <a href="/clinic/DrReg/accs/report.php">Report</a>
                </li>
                <li class="active">
                    <a href="/clinic/DrReg/accs/AddReport.php">Add Report</a>
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
      <div class="cover-image"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
              <br>
            <h1>Add New Accident_Report</h1>
            <br>
            <br>
          </div>
        </div>
      </div>
    </div>
            <br>
   <div class="container">
       <form action="insert.php" method="post">
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon" title="Enter The Name ">
            <span class="glyphicon glyphicon-user"></span>
          </span>
          <input type="text" name="name" placeholder="Name of Report " class="form-control" required="required">
          <br>
        </div>
      </div>

      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
          </span>
          <input type="date" name="expiry_date" class="form-control" required="required">
          <br>
        </div>
      </div>

      <br>
           <label for="name"> : Comment </label>
           <div class="col-md-6">
               <div class="form-group">
                                                <textarea id="Comment" name="type" class="form-control" rows="9" cols="25" required="required"
                                                          placeholder="Comment ... "></textarea>
               </div>

      <br>
         <br />
           <button type="submit" class="btn btn-primary pull-right" id="btnContactUs" >
               Save</button>
   </div>
        </div>

</body></html>
