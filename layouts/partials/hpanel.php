<!-- The main control board or panel for the dashboard,  aligned next to the side nav -->
<?php
require "../lib/helpers/connection.db.php";
?>

<div class="dash" >
       <div class="h_panel">
        <h1>Analytic overview</h1>
        <div class="flexboxs">

            <div class="flex1">
                  <!-- <h2>134</h2> -->
                  <h2>
                        <?php
                              foreach($db->query('SELECT COUNT(*) FROM questions') as $row){

                                echo  $row['COUNT(*)'];
                              }
                         ?>
                 </h2>
                    <label for="">Total Questions</label>
                   
            </div>

                            <div class="flex1">
                                 <!-- <h2>134</h2> -->
                                <h2>   
                                        <?php
                                                foreach($db->query('SELECT COUNT(*) FROM category') as $row){

                                                    echo  $row['COUNT(*)'];
                                                    }
                                            
                                            ?> 
                                             </h2>       
                <label for="">Categories</label>
            </div>
               
                         <div class="flex1">
                            <!-- <h2>211</h2> -->

                         <h2>
                                <?php
                                   foreach($db->query('SELECT COUNT(*) FROM questions WHERE user_id ='.$_SESSION['user_id']) as $row){

                                 echo  $row['COUNT(*)'];
                                } 
                                 ?>
                            </h2>
                <label for="">My Questions</label>
            </div>
        </div>
       </div>
</div>
