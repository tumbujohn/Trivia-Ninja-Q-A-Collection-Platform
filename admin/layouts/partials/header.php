<?php 
    require "../../lib/helpers/connection.db.php";
?> 
<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
        <link rel="stylesheet" href="../../asset/css/header.css">
        <link rel="stylesheet" href="../assets/css/nav.css">
        <link rel="stylesheet" href="../../asset/css/footer.css">
        <link rel="stylesheet" href="../../asset/css/userprofile.css">
        <link rel="stylesheet" href="../../asset/css/h_panel.css">
        <script src="https://kit.fontawesome.com/3c3539d3c1.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <script src="../../asset/js/menu.js"></script>
        <!-- <link rel="stylesheet" href="../../asset/css/n_panel.css"> -->
        <link rel="stylesheet" href="../../asset/css/style.css">
        <!-- admin table links -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../assets/css/admin.css">
<script src="assets/js/popup.js"></script>

      
    </head>
    <body>
        
        <header id="header">
            <div  class="head">
    <i class="fa fa-bars" id="bar" onClick="openNav()" ></i>
    <i class="fa fa-close" style="display:none;" id="clos" onClick="closeNav()" ></i>
    <span>Trivia Ninja</span>
            </div>
            
            <div  class="head user-info">
    <a href="../layouts/userprofile.php"><i class="fa fa-user"></i>
    <?php echo $_SESSION['username']; ?> 
    </a>
    <a id="log" href="../../logout.php">Log out</a> 
            </div>

        </header>
   
<div class="Dashboard-container">










        
