<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Add Patient</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">

    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $('#user_form').validate();
    </script>
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

          </div>
          <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active">

              </li>
              <li>
                <a href="#">Contacts</a>
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
            <img src="../assets/img/logo.png" alt="Smiley face" height="42" width="42">
            <h3>Clinic information system</h3>

          </div>




          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active">
                <a href="#">Patient registration</a>
              </li>
              <li>
                <a href="patientsjsoin.php">Patients</a>
              </li>
              <li>
                <a href="medicines/medicine.php">medicine Stor</a>
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
        <br>
      <div class="cover-image"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1>Add New Patient</h1>
            <br>
            <br>
          </div>
        </div>
      </div>
    </div>
   <div class="container">
    <form action="insert.php" method="post">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="well well-sm">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">First Name</label>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon" title=" First Name ">
            <span class="glyphicon glyphicon-user"></span>
          </span>
            <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter The First name" required="required"  class="required"  />
          <br>
        </div>
      </div>
                                        <label for="name">Last Name</label>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon">
            <span class="glyphicon glyphicon-user"></span>
          </span>
            <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter The Last Name" required="required" class="required" />
          <br>
        </div>
      </div>
                                        <label for="name">Date of Birth</label>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
          </span>
          <input type="date" name="iDob">
          <br>
        </div>
      </div>

                                        <label for="name">Gender</label>
      <input type="radio" name="gender" value="male" checked="">Male
      <input type="radio" name="gender" value="female">Female
      <br>
      <br>
                                        <label for="name">BloodGroup</label>

                                        <input type="text" class="form-control" id="BloodGroup" name="BloodGroup" placeholder="Enter The Blood Grou" required="required" class="required" /><br>

                                                <label for="name"> : Comment </label>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <textarea id="Comment" name="Comment" class="form-control" rows="9" cols="25" required="required"
                                                          placeholder="Comment ... "></textarea>
                                            </div>

                                        <label for="name">Tell :</label><br>
                    <input type="text" class="form-control" id="tell" name="tell" placeholder="Enter The Tell Number" required="required" class="required number" /><br>
                                        <label for="name">Addres:</label>
                                            <input type="text" class="form-control" id="addree" name="addree" placeholder="Enter The Addree" required="required"  class="required"/><br>

                                            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                                Save</button>
                                        </div>
                                    </div>
    </form>
    <br>


</body></html>
