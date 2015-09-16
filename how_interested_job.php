<b><center>
<?php 
require_once 'util/main.php';
require_once 'util/Validation.php';
include 'Questionnaire_header.php'; 
$error= validation(1);
$id=$_SESSION['id'];
?>

rate each of the following: 
<p>
    <form action="how_interested_job.php" method="post"> 
        
 <label>How interested are you in the job? </label>
 <br>     
 <?php
     for ($i=0;$i<=6;$i++){
       $j=$i+1;
       echo "<input type=radio name='interest_level' value=$j/>".$j."&nbsp &nbsp &nbsp &nbsp";
     }
 ?>    
    <br /><br>
        
</p>

<button type="submit" /> Submit</button>
</form>


<font color='red'><?php echo $error?></font>
<?php
$_SESSION['id']=$id;
?>
    </center></b>