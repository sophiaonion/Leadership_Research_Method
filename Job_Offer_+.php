
<?php require_once('util/main.php'); 
$id=$_SESSION['id'];
?>
<b>
<center><p> 
Congratulations, you scored highest in your group! <br><br>
 Therefore, you are eligible to take the lead in the following group task.  <br><br>
 If you decide to take the lead in your group, you will have two main responsibilities.<br><br>
 You will receive important information on the procedure of the group task; <br><br>
 it will be your responsibility to pass the instructions for the group activity on <br>
 to the group and lead the group during the task. <br><br>
 You will also have to critique and evaluate the other group members performances<br>
 at the end of the task and eliminate the person that you think performed most poorly.<br><br>
 After completing the first activity, you will give your criticism to each individual group member. <br><br>
 You will also have to tell the weakest performer of the group where their performance <br>
 was insufficient and why s/he will be eliminated from the group before a final group task.<br>
</p>

<a href="<?php echo $app_path;?>how_interested_job.php" >Next</a> 
<?php
$_SESSION['id']=$id;
?></center></b>