<?php require_once('util/main.php'); 
$id=$_SESSION['id'];
?>

<b><center><p> Congratulations, you scored highest in your group! <br><br>
    Therefore, you are eligible to take the lead in the following group task.<br><br>
    If you decide to take the lead in your group, you will have two main responsibilities.<br><br>
    You will receive important information on the procedure of the group task;<br><br>
    it will be your responsibility to pass the instructions for the group activity <br>
   on to the group and lead the group during the task.<br><br>
   After completing the activity, you will also have to give brief individual feedback to each group<br>
   member on their performance.
</p>
<a href="<?php echo $app_path;?>how_interested_job.php" >Next</a> 
<?php
$_SESSION['id']=$id;
?>
</center></b>