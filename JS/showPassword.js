function showPassword() {
    var x = document.getElementById("Registerpassword")
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}