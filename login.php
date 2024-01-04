<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "partials/_dbconnect.php";
    $phone_email = $_POST["phoneOrEmail"];
    $password = $_POST["password"];
    // $sql = "SELECT * FROM `userdata` WHERE `phone`='$phone_email' or `email`='$phone_email' and `password`='$pass_hash'";
    $sql = "SELECT * FROM `userdata` WHERE `phone`='$phone_email' or `email`='$phone_email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while($row=mysqli_fetch_assoc($result))
        {
            if(password_verify($password,$row['password'])){
                $showAlert = true;
                session_start();
                $_SESSION['loggedin']=true;
                $_SESSION['username']=$row['name'];
                header("location:index.php");
            }else {
                $showError = true;
            }
        }
    } else {
        $showError = true;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoomER Login</title>
</head>
<link rel="stylesheet" href="loginStyle.css">
<script src="script.js"></script>

<body>
    <div class="logo">
        <div style="margin-top:5px";>
            RoomER
        </div>
        <p style="color:rgb(128, 188, 6);">&nbsp;&nbsp;𝒴𝑜𝓊𝓇 𝒩𝑒𝓍𝓉 𝐻𝑜𝓂𝑒!</p>
        <!-- <p style="color:cyan;">&nbsp;&nbsp;𝒴𝑜𝓊𝓇 𝒩𝑒𝓍𝓉 𝐻𝑜𝓂𝑒!</p> -->
    </div>
    <?php
    require "Partials/navbar.php"
    ?>
    <div class="loginbody">
        <div class="formContainer">
            <form action="login.php" method="post">
                <caption>
                    <p class="h1">Login to RoomER</p>
                    <p style="font-size: 14px;margin-top:-3px;">Start your journey with us!</p>
                </caption>
                <div class="loginPass">
                    <div class="formIp">
                        <label for="phonOrEmail">Email/Phone</label><br>
                        <input type="text" id="phoneOrEmail" name="phoneOrEmail" placeholder="phone or email">
                    </div>
                    <div class="formIp">
                        <label for="pass">Password</label><br>
                        <input type="password" id="pass" name="password" placeholder="password"><br>
                        <a href="" class="fp">Forgot your password?</a>
                    </div>
                </div>
                <div class="loginDiv">
                    <input type="submit" value="Login" class="formIpLogin">
                </div>
                <div class="askSignUp">
                    Don't have an account?<a href="/register.php">Sign Up</a>
                </div>
            </form>
            <div class="note">
                <?php
                if ($showAlert) {
                    echo '<div id="success" class="success">
                            Successfully signed in.
                        </div>';
                }
                if ($showError) {
                    echo '<div id="error" class="error">
                            password does not match ! <br>
                            Please enter again
                        </div>';
                }
                ?>
            </div>
        </div>
    </div>
    <footer>
        <?php include "Partials/footer.php";?>
    </footer>
</html>