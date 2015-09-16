<b><?php 
require_once 'util/main.php';
require_once 'util/Validation.php';
require_once ('util/db_function.php');
$error=  validation(2); 
$id=$_SESSION['id'];
$interest=$_SESSION['interest_level'];
add_interest($id, $interest);
//writeToFile($interest);
?>

<p>
    <form action="accept_or_not.php" method="post"> 
        
    <center>
  
    <label>Do you accept the job</label>
        <input type="radio" name="accept" value=1 /> Yes 
        <input type="radio" name="accept" value=0 /> No <br />
    </p>
    
    <button type="submit" /> Submit</button>
    </form>
    </center>

<font color='red'><?php echo $error?></font>
<?php
$_SESSION['id']=$id;
?></b>