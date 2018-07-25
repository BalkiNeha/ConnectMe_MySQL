function myFunction() {
	var firstname = document.getElementById("firstname").value;
	var lastname = document.getElementById("lastname").value;
	var profilepicturefile = document.getElementById("profilepicturefile").value;
	var location = document.getElementById("location").value;
	var interesta = document.getElementById("interesta").value;
	var interestb = document.getElementById("interestb").value;
	var interestc = document.getElementById("interestc").value;
	var interestd = document.getElementById("interestd").value;
	var intereste = document.getElementById("intereste").value;
	var profession = document.getElementById("profession").value;
	var websitelink = document.getElementById("websitelink").value;

	// Returns successful data submission message when the entered information is stored in database.
	var dataString = 'firstname=' + firstname + '&lastname=' + lastname + '&profilepicturefile=' + profilepicturefile + '&location=' + location + '&interesta=' + interesta + '&interestb=' + interestb +  '&interestc=' + interestc + '&interestd=' + interestd +  '&intereste=' + intereste + '&profession=' + profession + '&websitelink=' + websitelink;
	alert(dataString);
	if (firstname == '' || lastname == '' || profilepicturefile == '' || location == '' || interesta == '' || interestb == '' || interestc == '' || interestd == '' || intereste == '' || profession == '' || websitelink == '') {
		alert("Please Fill All Fields");
	}  else {
	// AJAX code to submit form.
		$.ajax({
			type: "POST",
			url: "userdata.php",
			data: dataString,
			cache: false,
			success: function(data) {
				alert(data);
				window.location.href = "userpage.php";
			}
		});
	}
	return false;
}
