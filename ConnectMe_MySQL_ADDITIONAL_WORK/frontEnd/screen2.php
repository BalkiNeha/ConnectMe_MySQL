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
<!--SCREEN2-->
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Name</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="stylesheets/styles.css">
</head>

<body class="container">
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="#">ConnectMe</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  </nav><br><br><br><br><br>
  <em><p class="text-center"></p></em>
  <div class="progress">
    <div class="progress-bar" style="width:40%"></div>
  </div><br>
  <section class="backgroundColor">
    <form method="post" action="screen3.php">
      <div class="form-group">
        <center>
          <h2>What are your interests?</h2></center>
        <center>
          <h6 class="form-text text-muted">Select five interests from the table given below </h6></center><br>

          <div class="form-group">
          <h5>Interest 1</h5>
          <input id="interesta" class="form-control" type="text" name="interesta" required>
        </div>

        <div class="form-group">
          <h5>Interest 2</h5>
          <input id="interestb" class="form-control" type="text" name="interestb" required>
        </div>

        <div class="form-group">
          <h5>Interest 3</h5>
          <input id="interestc" class="form-control" type="text" name="interestc" required>
        </div>

        <div class="form-group">
          <h5>Interest 1</h5>
          <input id="interestd" class="form-control" type="text" name="interestd" required>
        </div>

        <div class="form-group">
          <h5>Interest 1</h5>
          <input id="intereste" class="form-control" type="text" name="intereste" required>
        </div>

        <div class="form-group">
        <input type="hidden" name="firstname" id="firstname" value="<?php echo $_POST['firstname']; ?>">
      </div>

 <div class="form-group">
<input type="hidden" name="lastname" id="lastname" value="<?php echo $_POST['lastname']; ?>">
</div>

<div class="form-group">
<input type="hidden" name="profilepicturefile" id="profilepicturefile" value="<?php echo $_POST['profilepicturefile']; ?>">
</div>

<div class="form-group">
<input type="hidden" name="location" id="location" value="<?php echo $_POST['location']; ?>">
</div>






<table border=1 style="width:100%" style="height:70%">
  <tr>
    <td>Photography</td>
    <td>Technology</td>
    <td>Design</td>
    <td>Music</td>
    <td>Enterpreneurship</td>
    <td>Travel</td>
  </tr>
  <tr>
    <td>Cycling</td>
    <td>Writing</td>
    <td>Arts</td>
    <td>Reading</td>
    <td>Food</td>
    <td>Movies</td>
  </tr>
  <tr>
    <td>Politics</td>
    <td>Hiking</td>
    <td>Programming</td>
    <td>Running</td>
    <td>Fitness</td>
    <td>Coffee</td>
  </tr>
  <tr>
    <td>Education</td>
    <td>DIY</td>
    <td>Cooking</td>
    <td>Acting</td>
    <td>Web-Development</td>
    <td>Innovation</td>
  </tr>
  <tr>
    <td>Yoga</td>
    <td>Painting</td>
    <td>Causes</td>
    <td>Volunteering</td>
    <td>Animals</td>
    <td>Dance</td>
  </tr>
  <tr>
  </tr>
  <tr>
    <td>Volleyball</td>
    <td>Fashion</td>
    <td>Shopping</td>
    <td>Sports</td>
    <td>Dogs</td>
    <td>Cats</td>
  </tr>
  <tr>
    <td>Cricket</td>
    <td>Baseball</td>
    <td>Football</td>
    <td>Basketball</td>
    <td>Wine</td>
    <td>Crafts</td>

  </tr>


   <div class="buttonHolder">
          <button type="submit" class="btn btn-primary" style="width:20%">Next</button>
        </div>
    </form>



      </div>


</table>

    <footer class="page-footer fixed-bottom font-small">
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</body>

</html>
