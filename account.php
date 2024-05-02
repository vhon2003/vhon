<?php
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - Shirtastic</title>
    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="shortcut icon" href="https://static.vecteezy.com/system/resources/thumbnails/002/399/795/small/tiger-head-illustration-tiger-design-for-t-shirt-mascot-logo-team-sport-vector.jpg" type="x-icon">
    <link href="https://fonts.googleapis.com/css2?
    family=Poppins:wght@300;400;500;600;700&display=swap" 
    rel="stylesheet">
</head>


<body>


<!-----account-page----->

<div id="form">
    <h1>Login Form</h1>
    <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
        <label>Username: </label>
        <input type="text" id="user" name="user"><br><br>
        <label>Password</label>
        <input type="password" id="pass" name="pass"><br><br>
        <input type="submit" id="btn" value="Login" name="submit"/>

    </form>
</div>
<script>
    function isvalid(){
        var user = document.form.user.value;
        var pass = document.form.pass.value;
        if(user.length=="" && pass.length==""){
            alert("Username and password field is empty!!!");
            return false
        }
        else{
            if(user.length==""){
            alert("Username is empty!!!");
            return false
            }
            if(pass.length==""){
            alert("Password is empty!!!");
            return false
            }
        }
    }
</script>


<!-----footer----->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Android and ios mobile phone</p>
                <div class="app-logo">
                    <img src="https://static-00.iconduck.com/assets.00/google-play-icon-1024x1024-ntijeqxd.png">
                    <img src="https://logowik.com/content/uploads/images/ios1780.logowik.com.webp" width="150" height="120">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="https://e7.pngegg.com/pngimages/919/310/png-clipart-iphone-google-play-app-store-apple-mobile-apple-store-and-google-play-logo-electronics-text-thumbnail.png" alt="">
                <p>Our Purpose is to sustainably make the pleasure and Benefits of 
                    Sports Accessible to the many</p>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>YouTube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2020 - Easy Tutorials</p>
    </div>
</div> 



</body>
</html>