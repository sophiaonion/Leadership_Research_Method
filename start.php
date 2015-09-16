<b><center>
<?php 
require_once 'util/main.php';
require_once 'util/Validation.php';
$gender_error=validation(0);

?>

<p>
<form action= "start.php" method="post"> 
        
        
    <label>Your Gender:</label>
        <input type="radio" name="gender" value=1 /> Male 
        <input type="radio" name="gender" value=0 /> Female <br /></p>
    <button type="submit" /> Submit</button>
    </form>


<font color='red'><?php echo $gender_error?></font>
<center></b>