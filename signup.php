
<!DOCTYPE html>
<html>
    <head>
        <title>signup</title>
        <link rel="stylesheet" href="asset/css/signup.css">
    </head> 
    <body>
        <!--  Sign up Form Starts here--->
        
        <form action="register.php" method="post" class="signup-form">
            <div id="signup">
                <div class="logo">
                <img src="asset/images/sign1.png" alt="trivia-ninja-logo">
                </div>
                <div id="input-group">
                    <h1 id="head">sign up</h1>
                   <div class="inputs">
                   <input type="text" placeholder="enter first name:" name="fname" id="fname" required>
                    <input type="text" placeholder="enter last name:" name="lname" id="lname">
                    <input type="text" placeholder="enter your username:" name="username" id="username">
                    <input type="email" placeholder="enter email adress:" name="email" id="email" required>
                    <input type="tel" placeholder="enter Phone:" name="tel" id="tel" required>
                    <input type="password" placeholder="enter password:" name="password" id="password" minlength="8" maxlength="14" required>
                    <input type="password" placeholder="confirm password:" name="cpassword" id="cpassword" minlength="8" maxlength="14" required>
                   </div>
                    <div class="signup">
                    <button type="submit" id="signup-btn" name="signup">Create account</button>
                    </div>
                    <div id="login">
                        <span class="login">already have an account?</span>
                        <a href="login.php" class="login">sign in </a>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>