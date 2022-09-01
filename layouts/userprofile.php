<?php

session_start();
    if(!ISSET($_SESSION['user_id'])){
        header('location:login.php');
    }
    
include ("profile.php");    


include ("partials/header.php");
include ("partials/sidenav.php");
// include ("./partials/panel");
// include ("./partials/footer");

?>
<html>
    <head>
    <link rel="stylesheet" href="../asset/css/userprofile.css">
</head>
<div style = "">

<body>

    <div class="container">
        <?php
        $_SESSION['username'] = $username;

        if(isset($_SESSION['username'])){
            $sql = "SELECT  username email password FROM users WHERE $username = $_SESSION[username]"; 
        }
        ?>
        <h2>Edit Profile</h2>
        <i class="fa fa-user"></i>
        <form action="profile_update.php" method="POST">
            
            <input type="text" name="username" id="username" placeholder="username">
            <input type="email" name="email" id="email" placeholder="email">
            <input type="password" name="pass" id="pass" placeholder="password">

            <div class="btns">
                <button type="submit" name="update">Update</button>
            </div>

        </form>
    </div>
   
    </body>

</div>
</html>
<?php//include ("partials/sidenav.php"); ?>