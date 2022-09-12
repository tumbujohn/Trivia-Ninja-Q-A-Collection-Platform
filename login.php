<?php 
include 'val_Login.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Trivia Ninja - LOGIN PAGE</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="asset/css/login.css">
    </head>
    <body>
        <div class="login">
            <div id="logo">
                <img src="asset/images/trivia.png" alt="TRIVIA-NINJA-LOGO">
            </div>
            <section id="sect">
                <div id="signin">
                    <h1 id="log">LOGIN</h1>
                    <!-- Login Form Starts here  -->
                    <form  method="post">
                        <div>
                            <label for="username">username</label>
                        </div>
                        <div>
                            <input type="text" id="username" name="username" placeholder="enter your username" required>
                        </div>
                        <div>
                            <label for="password">password</label>
                        </div>
                        <div>
                            <input type="password" placeholder="enter your password" name="password" minlength="8" maxlength="14" required>
                        </div>
                        <div>
                           <button type="submit" name="login" class="login__btn">LOGIN</button>
                        </div>
                        <div class="fpass">
                            <!-- <label for="remember"><input type="checkbox" id="remember" name="remember">remember me</label> -->
                          <a href=""> Forgot Password?</a>
                        </div>
                    </form>
                </div>
                <div id="signup">
                    <h1>welcome to login</h1>
                   <div class="sl">
                   <h4>Don't have an account?</h4>
                    <a href="signup.php" class="pointer"> Sign Up</a>
                   </div>
                </div>
            </section>
        </div>
        
    </body>
</html>