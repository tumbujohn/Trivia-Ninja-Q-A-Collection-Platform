<?php 
include 'val_Login.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Trivia Ninja - ADMIN LOGIN </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../asset/css/login.css">
    </head>
    <body>
        <div class="login">
            <div id="logo">
                <img src="../asset/images/trivia.png" alt="TRIVIA-NINJA-LOGO">
            </div>
            <section id="sect">
                <div id="signin">
                    <h1 id="log">LOGIN</h1>
                    <form  method="post">
                        <div>
                            <label for="username">username</label>
                        </div>
                        <div>
                            <input type="text" id="username" name="username" value="admin" placeholder="enter your username" required>
                        </div>
                        <div>
                            <label for="password">password</label>
                        </div>
                        <div>
                            <input type="password" placeholder="enter your password" value="1234" name="password" required>
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
            </section>
        </div>
        
    </body>
</html>