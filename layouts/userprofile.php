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

<div style = "">
<form action="profile_update.php" method="POST" >
   Username: <input type="text" name="username" value=""><br>
 
   Password: <input type="text" name="password"><br>
 
   Email: <input type="email" name="email"><br>
   
   <button type="submit" name="submit" value="update" name="update">Update</button>
   
</form>
<!-- we will have all (the above includes) in this div -->

</div>
<?php//include ("partials/sidenav.php"); ?>