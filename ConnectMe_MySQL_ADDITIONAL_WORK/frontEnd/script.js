function myFunction() {
  var email = document.getElementById("email").value;
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  var gender = document.getElementById("gender").value;

  // Returns successful data submission message when the entered information is stored in database.
  var dataString = 'email=' + email + '&username=' + username + '&password=' + password + '&gender=' + gender;
  if (email == '' || username == '' || password == '' || gender == '') {
    alert("Please Fill All Fields");
  } else {
  // AJAX code to submit form.
    $.ajax({
      type: "POST",
      url: "signup.php",
      data: dataString,
      cache: false,
      success: function(data) {
        alert(data);
        if(data == ''){
          window.location.href = "signup.html";
        }else{
          window.location.href = "screen1.php";
        }
      }
    });
  }
  return false;
}
