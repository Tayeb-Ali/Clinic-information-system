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
                <a href="../../"></a>
              </li>
              <li>
                <a href="../../contact/">Contacts</a>
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
            <img src="../../assets/img/logo.png" alt="Smiley face" height="42" width="42">
            <h4>Clinic information system</h4>
          </div>
          <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                <a href="../../">Home</a>
              <li>
                <a href="..//">Admin Cp</a>
              </li>
              <li>
                <a href="../../contact">Contacts</a>
              </li>
                <li class="active">
                <a href="search.php">Parents</a>
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
            <h1>Search Patient</h1>
            <br>
            <br>
          </div>
        </div>
      </div>
    </div>
    <form action="search.php" method="post">
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon" title=" Enter Tell number ">
            <span class="glyphicon glyphicon-user"></span>
          </span>
          <input type="text" name="tellnumber" placeholder=" Enter Tell number ">
          <br>
        </div>
          <input type="submit">
      </div>
