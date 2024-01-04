<div class="BurgerContainer">
        <div class="burger-menu" onclick="toggleNav()">&#9776;</div>

        <div id="myNavbar" class="navbar">
            <a href="/index.php">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
            <span style="font-size:20px;">Why ghoomer just check RoomER!</span>
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
    /* background-color: rgb(225, 204, 176); */
    background-color: white;
    padding-top: 50px;
    margin-top: -87px;
    right: 0;
}

.navbar a {
    padding: 15px 25px;
    text-decoration: none;
    font-size: 17px;
    color: #111;
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
    color: #d70e0e;
}

.burger-menu {
    font-size: 30px;
    cursor: pointer;
    position: fixed;
    top: 5px;
    right: 20px;
    z-index: 2;
}

.burger-menu:hover {
    color: #f1f1f1;
}

</style>