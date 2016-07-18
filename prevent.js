$(document).ready(function() {
$("next").click(function(e) {
e.preventDefault();
var name = $("#Faculty").val();
var email = $("#Majors").val();
var msg = $("#Specialization").val();
if (!(name == "select" || email == "select" || msg == "select")) {
$("#submitdata").empty();
$("#submitdata").append("Name: " + name + "<br/>Email: " + email + "<br/>Message: " + msg);
} else {
alert("Please Fill All Fields.");
}
});
});