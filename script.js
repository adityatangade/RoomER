function toggleNav() {
    var navbar = document.getElementById("myNavbar");
    if (navbar.style.width === "200px") {
        navbar.style.width = "0";
    } else {
        navbar.style.width = "200px";
    }
}

function closeSuccess(){
    success.style.display="none";
}
