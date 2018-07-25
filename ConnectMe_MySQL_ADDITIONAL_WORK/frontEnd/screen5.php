<?php
session_start();
if(isset($_SESSION["user_Id"])) {
  echo "Your session is running " . $_SESSION["user_Id"];
}
else{
  header("Location: index.html");
}
?>
<!DOCTYPE html>
<!--SCREEN5-->
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Name</title>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="stylesheets/styles.css">
</head>

<body class="container">
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="#">ConnectMe</a>
  </nav><br><br><br><br><br>
  <em><p class="text-center"></p></em>
  <div class="progress">
    <div class="progress-bar" style="width:90%"></div>
  </div><br>
  <section class="backgroundColor">
    <form id="screen5" name="screen5">
      <div class="form-group">
        <div class="form-group">
          <h5>Enter website link</h5>
          <input id="websitelink" class="form-control" type="text" name="websiteLink" required>
        </div>
        <input type="hidden" name="firstname" id="firstname" value="<?php echo $_POST['firstname']; ?>">

<input type="hidden" name="lastname" id="lastname" value="<?php echo $_POST['lastname']; ?>">

<input type="hidden" name="profilepicturefile" id="profilepicturefile" value="<?php echo $_POST['profilepicturefile']; ?>">

<input type="hidden" name="location" id="location" value="<?php echo $_POST['location']; ?>">

<input type="hidden" name="interesta" id="interesta" value="<?php echo $_POST['interesta']; ?>">

<input type="hidden" name="interestb" id="interestb" value="<?php echo $_POST['interestb']; ?>">

<input type="hidden" name="interestc" id="interestc" value="<?php echo $_POST['interestc']; ?>">

<input type="hidden" name="interestd" id="interestd" value="<?php echo $_POST['interestd']; ?>">

<input type="hidden" name="intereste" id="intereste" value="<?php echo $_POST['intereste']; ?>">


<input type="hidden" name="profession" id="profession" value="<?php echo $_POST['profession']; ?>">



          <input type="button" id="submit" onclick="myFunction();" class="btn btn-primary" name="Submit" value="submit">

      </div>
    </form>
    <footer class="page-footer font-small">
      <div class="container">
        <div class="row text-center d-flex flex-nowrap justify-content-center pt-5 mb-3">
          <div class="col-md-2 mb-3">
            <h6 class="text-uppercase font-weight-bold">
                <a href="#!">Help</a>
              </h6>
          </div>
          <div class="col-md-2 mb-3">
            <h6 class="text-uppercase font-weight-bold">
                <a href="#!">Terms</a>
              </h6>
          </div>
          <div class="col-md-2 mb-3">
            <h6 class="text-uppercase font-weight-bold">
                <a href="#!">Privacy</a>
              </h6>
          </div>
          <div class="col-md-2 mb-3">
            <h6 class="text-uppercase font-weight-bold">
                <a href="#!">Contact Us</a>
              </h6>
          </div>
        </div>
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
          <label style="font-weight:normal;" for="footer">Website Name. All rights reserved.</label>
        </div>
      </div>
    </footer>
  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="userscript.js"></script>
</body>

</html>
