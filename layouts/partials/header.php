<?php 
// include connection 
    require "../lib/helpers/connection.db.php";
?> 
<!DOCTYPE html>
<html>
    <head>
        <title>
            <!-- CSS links for all layouts and pages -->

        </title>
        <link rel="stylesheet" href="../asset/css/header.css">
        <link rel="stylesheet" href="../asset/css/nav.css">
        <link rel="stylesheet" href="../asset/css/footer.css">
        <link rel="stylesheet" href="../asset/css/userprofile.css">
        <link rel="stylesheet" href="../asset/css/h_panel.css">
        <link rel="stylesheet" href="../asset/css/n_panel.css">
        <link rel="stylesheet" href="../asset/css/style.css">
<!-- Scripts included in the application  -->
        <script src="https://kit.fontawesome.com/3c3539d3c1.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <script src="../asset/js/menu.js"></script>
    </head>
    <body>
        <header id="header">
            <div  class="head">
    <i class="fa fa-bars" id="bar" onClick="openNav()" ></i>
    <i class="fa fa-close" style="display:none;" id="clos" onClick="closeNav()" ></i>
    <span>Trivia Ninja</span>
            </div>
            <!-- Displays Username when Logged in  -->
            <div  class="head user-info">
    <a href="../layouts/userprofile.php"><i class="fa fa-user"></i>
    <?php echo $_SESSION['username']; ?> 
    </a>
    <a id="log" href="../logout.php">Log out</a> 
            </div>

        </header>
   
<div class="Dashboard-container">










        
