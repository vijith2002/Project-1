
function clicked() {
    var names = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var age = document.getElementById("age").value;
    var other = document.getElementById("desc").value;
    var gender = document.getElementById("gender").value;
    var email = document.getElementById("email").value;

    if (names == "" || phone == "" || age == "" || gender == "" || other == "" || email == "") {
        alert("Enter the required details");
        return false;
    }
    if (phone.length > 10 || phone.length < 10)
       { alert("Enter a valid phone number");
        return false;}
    return true;

}