<?php

session_start();
    if(!ISSET($_SESSION['username'])){
        header('location:../login.php');
    }
    
// include ("profile.php");    


include ("partials/header.php");
include ("partials/sidenav.php");
// include ("./partials/panel");
// include ("./partials/footer");

?>



<?php include ("./partials/n_panel.php"); ?>
<!-- we will have all (the above includes) in this div -->


<?php include ("./partials/footer.php"); ?>