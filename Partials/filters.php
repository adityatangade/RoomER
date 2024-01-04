<div class="BurgerContainer">
        <div class="burger-menu" onclick="toggleNav()">Profile</div> 
        <!-- &#9776;Burger -->
        <div id="myNavbar" class="navbar">
            <a href="/profile.php">Home</a>
            <a href="#">help</a>
            <a href="#">Services</a>
            <a href="#">Contact us</a>
            <?php
            if($_SESSION['loggedin'])
            {
                echo '<a href="logout.php"><button>log out</button></a>';
            }
            ?>
            <span style="font-size:20px">Why ghoomer just check RoomER!</span>
        </div>
</div>
<style>
.BurgerContainer {
    margin: 0;
    font-family: 'Arial', sans-serif;
}

.navbar {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    overflow-x: hidden;
    transition: 0.5s;
    background-color: darkcyan;
    padding-top: 50px;
    margin-top: 7px;
    right: 0;
}

.navbar a {
    padding: 15px 25px;
    text-decoration: none;
    font-size: 17px;
    color: white;
    display: block;
    transition: 0.3s;
}

.navbar span {
    color: black;
    font-style: italic;
    padding: 15px 25px;
    font-size: 17px;
    display: block;
    transition: 0.3s;
}

.navbar a:hover {
    color: black;
}

.burger-menu {
    font-size: 20px;
    cursor: pointer;
    position: fixed;
    top: 5px;
    right: 20px;
    z-index: 2;
    color: black;
    margin-top: 55px;
}

.burger-menu:hover {
    /* color: #f1f1f1; */
    color: grey;
}
</style>

<script>
    function toggleNav() {
    var navbar = document.getElementById("myNavbar");
    if (navbar.style.width === "200px") {
        navbar.style.width = "0";
    } else {
        navbar.style.width = "200px";
    }
}

</script>