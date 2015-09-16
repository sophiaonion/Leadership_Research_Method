<b><center>
<?php 
require_once 'util/main.php';
require_once ('util/db_function.php');
$id=$_SESSION['id'];
$member1=$_POST['ranking1'];
$member2=$_POST['ranking2'];
$member3=$_POST['ranking3'];
passing_position($id, $member1, $member2, $member3);
//writeToFile($member1);
//writeToFile($member2);
//writeToFile($member3);
?>
<p>
Next you are going to take a short questionnaire.<br><br>
When you are ready click next to start and follow the instructions on the screen.
</p>
<a href="<?php echo $app_path;?>set1.php" >Next</a>  
<?php
$_SESSION['id']=$id;
?>
<center></b>