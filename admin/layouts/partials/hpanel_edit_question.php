<?php
#include connection
require "../../lib/helpers/connection.db.php";


# Define variables and initialize with empty values



					if(isset($_POST['add'])){

						$username = $_POST['username'];
						$email = $_POST['email'];
						$tel = $_POST['tel'];
						$password = $_POST['password'];
						
						 
						$sql = "INSERT INTO users ( username, email, tel, password) 
					  VALUES ( 'username', '$email','$tel', '$password')";
						$send=mysqli_query($db, $sql);

                        if($send){
                            echo '<script>alert("User successfully added");</script>';
                            echo "<script>" . "window.location.href='../dashboard.php';" . "</script>";
                            // header("location:../dashboard.php");
                            // exit();
                          }
                          else{
                            echo "Error:" .$sql . "<br>" . mysql_error($db);
                          }
                        }
					  
						 ?>