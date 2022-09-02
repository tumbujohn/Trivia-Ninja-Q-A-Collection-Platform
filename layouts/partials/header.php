<?php 
    require "../lib/helpers/connection.db.php";
?> 
<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
        <link rel="stylesheet" href="../asset/css/header.css">
        <link rel="stylesheet" href="../asset/css/nav.css">
        <link rel="stylesheet" href="../asset/css/h_panel.css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    </head>
    <body>
        <header id="header">
            <div id="logoname" class="head">
    <i class="fa fa-bars"></i>
    <span>Trivia Ninja</span>
            </div>
            <div id="user" class="head">

    <a href="../layouts/userprofile.php"><i class="fa fa-user"></i></a>
  
    <?php 
          
          echo $_SESSION['username'];
           
    ?> 
     <br>
   
    <h6><a id="log" href="../logout.php">Log out</a> </h6>  
            </div>
        </header>
   











        
