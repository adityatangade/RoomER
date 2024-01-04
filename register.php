<?php
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include "partials/_dbconnect.php";
    $name=$_POST["name"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    $exist=false;
    if(($password == $cpassword) && ($exist==false) && $password !=""){
        $hash=password_hash($password,PASSWORD_DEFAULT);
        $sql="INSERT INTO `userdata` (`name`, `phone`, `email`, `password`, `dt`) VALUES ('$name', '$phone', '$email', '$hash', current_timestamp())";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            $showAlert=true;
            header("location:login.php");
           }  
        }
        else{
            $showError=true;
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoomER Registration</title>
</head>
<link rel="stylesheet" href="registerStyle.css">
<script src="script.js"></script>

<body>
    <div id="register" class="container">
        <div class="logo">
            <div style="margin-top:5px";>
                RoomER
            </div>
            <!-- <p style="color:rgb(128, 188, 6);">&nbsp;&nbsp;𝒴𝑜𝓊𝓇 𝒩𝑒𝓍𝓉 𝐻𝑜𝓂𝑒!</p> -->
            <p style="color:rgb(128, 188, 6);">&nbsp;&nbsp;𝒴𝑜𝓊𝓇 𝒩𝑒𝓍𝓉 𝐻𝑜𝓂𝑒!</p>
        </div>
    </div>
    <?php
     require "Partials/navbar.php"
    ?>
    <div class="formContainer">
        <form action="register.php" method="post">
            <caption style="font-size:13px;">
                <p class="h1">Register to RoomER</p>
                Start your journey with us!
            </caption>
            <div class="inputs">
                <div>
                    <!-- <label for="name">Name</label><br> -->
                    <input type="text" id="name" name="name" placeholder="full name">
                </div>
                <div>
                    <!-- <label for="phone">Phone</label><br> -->
                    <input type="tel" id="phone" name="phone" placeholder="phone">
                </div>
                <div>
                    <!-- <label for="email">Email</label><br> -->
                    <input type="email" id="email" name="email" placeholder="email">
                </div>
                <div>
                    <!-- <label for="pass">Password</label><br> -->
                    <input type="password" id="password" name="password" placeholder="set password">
                </div>
                <div>
                    <!-- <label for="confirmpass">Confirm Password</label><br> -->
                    <input type="password" id="cpassword" name="cpassword" placeholder="confirm password">
                </div>
                <p style="font-size:14px;">Already have an account?<a href="login.php">Sign in</a></p>
                <p>
                    <input type="submit" value="Sign Up" class="submit">
                </p>
                <?php
                if($showAlert){
                echo '<div id="success" class="success">
                    Successfully signed up ! Click sign in to login.
                </div>';
                }
                if($showError){
                echo '<div id="error" class="error">
                    password does not match ! Please re-enter .
                </div>';
                }
                 ?>
            </div>
        </form>
    </div>
    <footer>
        <?php include "Partials/footer.php";?>
    </footer>
</body>
</html>