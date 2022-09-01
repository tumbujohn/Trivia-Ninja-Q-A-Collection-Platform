<?php

session_start();
    if(!ISSET($_SESSION['username'])){
        header('location:login.php');
    }
    
include ("profile.php");    
include ("partials/header.php");
include ("partials/sidenav.php");
// include ("./partials/panel");
// include ("./partials/footer");

?>

    <div class="container">
        <?php
         $username=$_SESSION['username'] ;

        $sql = mysqli_query($db, "SELECT * FROM `users` WHERE `username` = '$username'");
      
        // $row = mysqli_num_rows($fetch);
         if ($sql) {
            $fetch = mysqli_fetch_assoc($sql);
        ?>
        <h2>Edit Profile</h2>
        <i class="fa fa-user"></i>
        <form action="profile_update.php" method="POST">
            
            <input type="text" name="username" id="username" value="<?php echo $fetch['username'] ?>">
            <input type="email" name="email" id="email" value="<?php echo $fetch['email'] ?>">
            <input type="password" name="password" id="pass" value="<?php echo $fetch['password'] ?>">

            <div class="btns">
                <button type="submit" name="update">Update</button>
            </div>

        </form>

        <?php
 
} else {
     echo "no user"; }
?>

    </div>
   
    </body>
</html>
<?php//include ("partials/sidenav.php"); ?>