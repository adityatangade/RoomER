<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROMMER</title>
</head>
<link rel="stylesheet" href="style.css">
<script src="script.js"></script>

<body>
    <header>
        <div class="logo">
            <div>
                RoomER
            </div>
            <!-- <p style="color:rgb(128, 188, 6);">&nbsp;&nbsp;𝒴𝑜𝓊𝓇 𝒩𝑒𝓍𝓉 𝐻𝑜𝓂𝑒!</p> -->
            <p style="color:white;margin-left:5px;">&nbsp;&nbsp;𝒴𝑜𝓊𝓇 𝒩𝑒𝓍𝓉 𝐻𝑜𝓂𝑒!</p>
        </div>
        <div id="navbar">
            <ol>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Help</a></li>
            </ol>
        </div>
        <div class="searchBox">
            <input type="text" class="search" placeholder="City/ Area / Location"> <button class="btn_search">Search</button>
        </div>
    </header>
    <div class="content">
        <div class="filters">
            <div class="innerfilter">
                <div class="type">
                    <div>
                        <input type="checkbox" name="type" id="Flats">
                        <label for="type">Flats</label>
                    </div>
                    <div>
                        <input type="checkbox" name="type" id="PGs">
                        <label for="type">PGs</label>
                    </div>
                    <div>
                        <input type="checkbox" name="type" id="Hostels">
                        <label for="type">Hostels</label>
                    </div>
                </div>
                <div class="tenant">
                    <div>
                        <input type="checkbox" name="tenant" id="boy">
                        <label for="boy">Boy</label>
                    </div>
                    <div>
                        <input type="checkbox" name="tenant" id="girl">
                        <label for="boy">Girl</label>
                    </div>
                    <div>
                        <input type="checkbox" name="tenant" id="girl">
                        <label for="boy">Family</label>
                    </div>
                </div>
                <div class="budget">
                    <p>Rent</p>
                    <select name="" id="">
                        <option value="">2000</option>
                        <option value="">3000</option>
                        <option value="">4000</option>
                        <option value="">5000</option>
                        <option value="">6000</option>
                        <option value="">7000</option>
                        <option value="">8000</option>
                        <option value="">9000</option>
                    </select>
                    <span>&nbsp;to&nbsp;</span>
                    <select name="" id="">
                        <option value="">4000</option>
                        <option value="">5000</option>
                        <option value="">6000</option>
                        <option value="">7000</option>
                        <option value="">8000</option>
                        <option value="">9000</option>
                        <option value="">10000</option>
                        <option value="">15000</option>
                    </select>
                </div>
                <div class="profile">
                    <div><img src="" alt="profile" class="profilepic"></div>
                    <div class="profilelink"><a href="Your_Profile.html"><?php echo $_SESSION['username'] ?></a></div>
                </div>
            </div>
        </div>
        <div class="properties">
            <?php
            include "Partials/filters.php";
            ?>
            <?php
            include "Partials/card.php";
            ?>
        </div>
    </div>
</body>

</html>