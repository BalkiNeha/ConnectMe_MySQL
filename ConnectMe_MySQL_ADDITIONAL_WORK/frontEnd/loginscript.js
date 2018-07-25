function myFunction() {
var email = document.getElementById("email1").value;
var password = document.getElementById("password").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'email=' + email + '&password=' + password ;
if (email == '' || password == '' ) {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
$.ajax({
type: "POST",
url: "login.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}